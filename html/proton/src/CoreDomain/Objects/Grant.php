<?php

namespace CoreDomain\Objects;


/**
 * Class Grant
 * @package CoreDomain\Objects
 */
class Grant extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $competitive;
    /**
     * @var
     */
    protected $currency;
    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $fundingOrganization;
    /**
     * @var
     */
    protected $fundingRenewable;
    /**
     * @var
     */
    protected $fundingType;
    /**
     * @var
     */
    protected $grantStatus;
    /**
     * @var
     */
    protected $grantType;
    /**
     * @var
     */
    protected $investigationRole;
    /**
     * @var
     */
    protected $multiyearDetails;
    /**
     * @var
     */
    protected $otherInvestigators;
    /**
     * @var
     */
    protected $portionofFunding;
    /**
     * @var
     */
    protected $programName;
    /**
     * @var
     */
    protected $projectDescription;
    /**
     * @var
     */
    protected $projectTitle;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $rolesofOtherInvestigators;
    /**
     * @var
     */
    protected $startDate;
    /**
     * @var
     */
    protected $timeCommitmentPerYear;
    /**
     * @var
     */
    protected $totalAmount;
    /**
     * @var
     */
    protected $yearAwarded;

    /**
     * @return mixed
     */
    public function getCompetitive()
    {
        return $this->competitive;
    }

    /**
     * @param mixed $competitive
     *
     * @return Grant
     */
    public function setCompetitive($competitive)
    {
        $this->competitive = $competitive;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     *
     * @return Grant
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     *
     * @return Grant
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFundingOrganization()
    {
        return $this->fundingOrganization;
    }

    /**
     * @param mixed $fundingOrganization
     *
     * @return Grant
     */
    public function setFundingOrganization($fundingOrganization)
    {
        $this->fundingOrganization = $fundingOrganization;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFundingRenewable()
    {
        return $this->fundingRenewable;
    }

    /**
     * @param mixed $fundingRenewable
     *
     * @return Grant
     */
    public function setFundingRenewable($fundingRenewable)
    {
        $this->fundingRenewable = $fundingRenewable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFundingType()
    {
        return $this->fundingType;
    }

    /**
     * @param mixed $fundingType
     *
     * @return Grant
     */
    public function setFundingType($fundingType)
    {
        $this->fundingType = $fundingType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrantStatus()
    {
        return $this->grantStatus;
    }

    /**
     * @param mixed $grantStatus
     *
     * @return Grant
     */
    public function setGrantStatus($grantStatus)
    {
        $this->grantStatus = $grantStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrantType()
    {
        return $this->grantType;
    }

    /**
     * @param mixed $grantType
     *
     * @return Grant
     */
    public function setGrantType($grantType)
    {
        $this->grantType = $grantType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvestigationRole()
    {
        return $this->investigationRole;
    }

    /**
     * @param mixed $investigationRole
     *
     * @return Grant
     */
    public function setInvestigationRole($investigationRole)
    {
        $this->investigationRole = $investigationRole;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMultiyearDetails()
    {
        return $this->multiyearDetails;
    }

    /**
     * @param mixed $multiyearDetails
     *
     * @return Grant
     */
    public function setMultiyearDetails($multiyearDetails)
    {
        $this->multiyearDetails = $multiyearDetails;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOtherInvestigators()
    {
        return $this->otherInvestigators;
    }

    /**
     * @param mixed $otherInvestigators
     *
     * @return Grant
     */
    public function setOtherInvestigators($otherInvestigators)
    {
        $this->otherInvestigators = $otherInvestigators;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPortionofFunding()
    {
        return $this->portionofFunding;
    }

    /**
     * @param mixed $portionofFunding
     *
     * @return Grant
     */
    public function setPortionofFunding($portionofFunding)
    {
        $this->portionofFunding = $portionofFunding;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * @param mixed $programName
     *
     * @return Grant
     */
    public function setProgramName($programName)
    {
        $this->programName = $programName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectDescription()
    {
        return $this->projectDescription;
    }

    /**
     * @param mixed $projectDescription
     *
     * @return Grant
     */
    public function setProjectDescription($projectDescription)
    {
        $this->projectDescription = $projectDescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectTitle()
    {
        return $this->projectTitle;
    }

    /**
     * @param mixed $projectTitle
     *
     * @return Grant
     */
    public function setProjectTitle($projectTitle)
    {
        $this->projectTitle = $projectTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResearchClassification()
    {
        return $this->researchClassification;
    }

    /**
     * @param mixed $researchClassification
     *
     * @return Grant
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRolesofOtherInvestigators()
    {
        return $this->rolesofOtherInvestigators;
    }

    /**
     * @param mixed $rolesofOtherInvestigators
     *
     * @return Grant
     */
    public function setRolesofOtherInvestigators($rolesofOtherInvestigators)
    {
        $this->rolesofOtherInvestigators = $rolesofOtherInvestigators;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     *
     * @return Grant
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeCommitmentPerYear()
    {
        return $this->timeCommitmentPerYear;
    }

    /**
     * @param mixed $timeCommitmentPerYear
     *
     * @return Grant
     */
    public function setTimeCommitmentPerYear($timeCommitmentPerYear)
    {
        $this->timeCommitmentPerYear = $timeCommitmentPerYear;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param mixed $totalAmount
     *
     * @return Grant
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYearAwarded()
    {
        return $this->yearAwarded;
    }

    /**
     * @param mixed $yearAwarded
     *
     * @return Grant
     */
    public function setYearAwarded($yearAwarded)
    {
        $this->yearAwarded = $yearAwarded;
        return $this;
    }

}