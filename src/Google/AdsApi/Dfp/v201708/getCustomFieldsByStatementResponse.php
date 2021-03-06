<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCustomFieldsByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\CustomFieldPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\CustomFieldPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\CustomFieldPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\CustomFieldPage $rval
     * @return \Google\AdsApi\Dfp\v201708\getCustomFieldsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
