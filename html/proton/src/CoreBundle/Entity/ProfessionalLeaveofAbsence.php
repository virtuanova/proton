<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ProfessionalLeaveofAbsence as BaseProfessionalLeaveofAbsence;

/**
 * ProfessionalLeaveofAbsence
 *
 * @ORM\Table(name="professional_leaveof_absence")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProfessionalLeaveofAbsenceRepository")
 */
class ProfessionalLeaveofAbsence extends BaseProfessionalLeaveofAbsence
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="proj_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $projId;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="host_institution", type="string", length=255, nullable=true, unique=false)
     */
    protected $hostInstitution;

    /**
     * @var string
     *
     * @ORM\Column(name="leave_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $leaveType;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated_at", type="datetime")
     */
    protected $lastUpdatedAt;

}