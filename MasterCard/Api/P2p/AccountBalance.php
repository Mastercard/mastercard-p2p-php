<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\P2p;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class AccountBalance extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "ce935c38-c0db-4b48-b976-d697a6160521":
                return new OperationConfig("/send/v1/partners/{partnerId}/non-card-tokens/{non-card-tokens}/account-balance", "query", array(), array());
            case "683a6671-3349-4c92-9ccc-ac58bcabac1f":
                return new OperationConfig("/send/v1/partners/{partnerId}/account-balances", "query", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }







    /**
     * Query objects of type AccountBalance by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return AccountBalance of the response
     */
    public static function accountBalanceForSpecificAccount($criteria)
    {
        return self::execute("ce935c38-c0db-4b48-b976-d697a6160521",new AccountBalance($criteria));
    }





    /**
     * Query objects of type AccountBalance by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return AccountBalance of the response
     */
    public static function accountBalancesForSpecificPartner($criteria)
    {
        return self::execute("683a6671-3349-4c92-9ccc-ac58bcabac1f",new AccountBalance($criteria));
    }


}
