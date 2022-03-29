<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pH7CMS extends Model
{
    use HasFactory;

    const JSON_TYPE = 1, ARR_TYPE = 2, OBJ_TYPE = 3;

    private
    $_sPKey,
    $_sDomain,
    $_sRemoteDomain,
    $_sSslPath,
    $_sResponse,
    $_aAllowTypes;

    /**
     * Assign values to the attributes.
     *
     * @param string $sPrivateKey The Private pH7CMS API Key. It is available in your ~/_protected/app/configs/config.ini file after the installation.
     * @param string $sRemoveDomain The URL of the domain where pH7CMS is installed where you'll retrieve the date. Ex: "http://my-ph7cms-site.com/"
     * @param string $sSslPath If the URL where your installed pH7CMS used SSL certificate, you have to specify the certificate directory here. Ex: "/path/certificate.pem". Default: NULL
     */
    public function __construct($sPrivateKey = 'ef45e5cd5bcbdd3c4a1c9c55eaa86ff9f722b347', $sRemoteDomain = 'development.hushcupid.com', $sSslPath = null)
    {
        $this->_sPKey = $sPrivateKey;
        $this->_sDomain = 'ph7cms.com';
        $this->_sRemoteDomain = (substr($sRemoteDomain, -1) != '/' ? $sRemoteDomain . '/' : $sRemoteDomain); // The domain has to finished by a Slash "/"
        $this->_sSslPath = $sSslPath;
        $this->_aAllowTypes = array('GET', 'POST', 'PUT', 'DELETE');
    }

    public function get($sUrl, array $aParms)
    {
        $this->_send($sUrl, $aParms, 'GET');
        return $this;
    }

    public function post($sUrl, array $aParms)
    {
        $this->_send($sUrl, $aParms, 'POST');
        return $this->getResponse();
    }

    public function put($sUrl, array $aParms)
    {
        $this->_send($sUrl, $aParms, 'PUT');
        return $this;
    }

    public function deleteMe($sUrl, array $aParms)
    {
        $this->_send($sUrl, $aParms, 'DELETE');
        return $this;
    }

    /**
     * Get the response.
     *
     * @param integer $sType The type of response. Can be 'PH7CMS::OBJ_TYPE', 'PH7CMS::ARR_TYPE', or 'PH7CMS::JSON_TYPE'. Default: PH7CMS::OBJ_TYPE
     * @return mixed (string | array | object) The response into JSON, Array or Object format.
     * @throws InvalidArgumentException If the type (specified in $sType parameter) is invalid.
     */
    public function getResponse($sType = self::OBJ_TYPE)
    {
        switch ($sType)
        {
            case static::OBJ_TYPE:
                return json_decode($this->_sResponse);
            break;

            case static::ARR_TYPE:
                return json_decode($this->_sResponse, true);
            break;

            case static::JSON_TYPE:
                return $this->_sResponse; // The data is already encoded in JSON
            break;

            default:
                throw new \InvalidArgumentException ('Invalide Response Type. The type can only be "PH7CMS::OBJ_TYPE", "PH7CMS::ARR_TYPE", or "PH7CMS::JSON_TYPE"');
        }
    }

    /**
     * Sent data to the remote site.
     *
     * @param string $sUrl The target URL to send the data.
     * @param array $aParms The request parameters to send.
     * @param string $sType The type of request. Choose only between: 'GET', 'POST', 'PUT' and 'DELETE'.
     * @throws InvalidArgumentException If the type (specified in $sType parameter) is invalid.
     * @return void
     */
    private function _send($sUrl, array $aParms, $sType)
    {

        if (!in_array($sType, $this->_aAllowTypes))
            throw new \InvalidArgumentException ('The Request Type can be only "GET", "POST", "PUT" or "DELETE!"');

        $aParms += array('private_api_key' => $this->_sPKey, 'url' => $this->_sDomain); // Add the API info to the parameters

        $sPostString = http_build_query($aParms, '', '&');

        $rCurl = curl_init($this->_sRemoteDomain . $sUrl);
        curl_setopt($rCurl, CURLOPT_POSTFIELDS, $sPostString);
        curl_setopt($rCurl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($rCurl, CURLINFO_HEADER_OUT, true);
        curl_setopt($rCurl, CURLOPT_CUSTOMREQUEST, "$sType");

        if (!empty($this->_sSslPath))
        {
            curl_setopt($rCurl, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($rCurl, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($rCurl, CURLOPT_CAINFO, $this->_sSslPath);
        }

        // Set the Response into an attribute
        $this->_sResponse = curl_exec($rCurl);
        curl_close($rCurl);
    }
}
