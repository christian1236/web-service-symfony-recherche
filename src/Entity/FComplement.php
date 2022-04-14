<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\FComplementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * FComplement
 *
 * @ORM\Table(name="F_Complement", indexes={@ORM\Index(name="idx_email_valeur", columns={"email_valeur"}), @ORM\Index(name="idx_fix2_valeur", columns={"Fix2_valeur"}), @ORM\Index(name="idx_fix_origine", columns={"fix_origine"}), @ORM\Index(name="idx_fix_valeur", columns={"Fix_valeur"}), @ORM\Index(name="idx_portable_valeur", columns={"portable_valeur"})})
 * @ORM\Entity
 * 
 * @ApiResource()
 * @ORM\Entity(repositoryClass=FComplementRepository::class)
 *
 */
class FComplement
{
    /**
     * @var string
     *
     * @ORM\Column(name="F_NGroup", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fNgroup;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_origine", type="string", length=50, nullable=false)
     */
    private $postalOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="Fix_valeur", type="string", length=32, nullable=false)
     */
    private $fixValeur;

    /**
     * @var string
     *
     * @ORM\Column(name="fix_origine", type="string", length=50, nullable=false)
     */
    private $fixOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="fix_id", type="string", length=20, nullable=false)
     */
    private $fixId;

    /**
     * @var string
     *
     * @ORM\Column(name="Fix2_valeur", type="string", length=32, nullable=false)
     */
    private $fix2Valeur;

    /**
     * @var string
     *
     * @ORM\Column(name="fix2_origine", type="string", length=50, nullable=false)
     */
    private $fix2Origine;

    /**
     * @var string
     *
     * @ORM\Column(name="fix2_id", type="string", length=20, nullable=false)
     */
    private $fix2Id;

    /**
     * @var string
     *
     * @ORM\Column(name="portable_valeur", type="string", length=32, nullable=false)
     */
    private $portableValeur;

    /**
     * @var string
     *
     * @ORM\Column(name="portable_origine", type="string", length=50, nullable=false)
     */
    private $portableOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="portable_id", type="string", length=20, nullable=false)
     */
    private $portableId;

    /**
     * @var string
     *
     * @ORM\Column(name="email_valeur", type="string", length=32, nullable=false)
     */
    private $emailValeur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_origine", type="string", length=50, nullable=false)
     */
    private $emailOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="email_id", type="string", length=20, nullable=false)
     */
    private $emailId;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_habitation_val", type="string", length=1, nullable=false)
     */
    private $statutHabitationVal;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_habitation_origine", type="string", length=50, nullable=false)
     */
    private $statutHabitationOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_habitation_id", type="string", length=20, nullable=false)
     */
    private $statutHabitationId;

    /**
     * @var string
     *
     * @ORM\Column(name="type_habitat_val", type="string", length=1, nullable=false)
     */
    private $typeHabitatVal;

    /**
     * @var string
     *
     * @ORM\Column(name="type_habitat_origine", type="string", length=50, nullable=false)
     */
    private $typeHabitatOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="type_habitat_id", type="string", length=20, nullable=false)
     */
    private $typeHabitatId;

    /**
     * @var string
     *
     * @ORM\Column(name="csp_val", type="string", length=1, nullable=false)
     */
    private $cspVal;

    /**
     * @var string
     *
     * @ORM\Column(name="csp_origine", type="string", length=50, nullable=false)
     */
    private $cspOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="csp_id", type="string", length=20, nullable=false)
     */
    private $cspId;

    public function getFNgroup(): ?string
    {
        return $this->fNgroup;
    }

    public function getPostalOrigine(): ?string
    {
        return $this->postalOrigine;
    }

    public function setPostalOrigine(string $postalOrigine): self
    {
        $this->postalOrigine = $postalOrigine;

        return $this;
    }

    public function getFixValeur(): ?string
    {
        return $this->fixValeur;
    }

    public function setFixValeur(string $fixValeur): self
    {
        $this->fixValeur = $fixValeur;

        return $this;
    }

    public function getFixOrigine(): ?string
    {
        return $this->fixOrigine;
    }

    public function setFixOrigine(string $fixOrigine): self
    {
        $this->fixOrigine = $fixOrigine;

        return $this;
    }

    public function getFixId(): ?string
    {
        return $this->fixId;
    }

    public function setFixId(string $fixId): self
    {
        $this->fixId = $fixId;

        return $this;
    }

    public function getFix2Valeur(): ?string
    {
        return $this->fix2Valeur;
    }

    public function setFix2Valeur(string $fix2Valeur): self
    {
        $this->fix2Valeur = $fix2Valeur;

        return $this;
    }

    public function getFix2Origine(): ?string
    {
        return $this->fix2Origine;
    }

    public function setFix2Origine(string $fix2Origine): self
    {
        $this->fix2Origine = $fix2Origine;

        return $this;
    }

    public function getFix2Id(): ?string
    {
        return $this->fix2Id;
    }

    public function setFix2Id(string $fix2Id): self
    {
        $this->fix2Id = $fix2Id;

        return $this;
    }

    public function getPortableValeur(): ?string
    {
        return $this->portableValeur;
    }

    public function setPortableValeur(string $portableValeur): self
    {
        $this->portableValeur = $portableValeur;

        return $this;
    }

    public function getPortableOrigine(): ?string
    {
        return $this->portableOrigine;
    }

    public function setPortableOrigine(string $portableOrigine): self
    {
        $this->portableOrigine = $portableOrigine;

        return $this;
    }

    public function getPortableId(): ?string
    {
        return $this->portableId;
    }

    public function setPortableId(string $portableId): self
    {
        $this->portableId = $portableId;

        return $this;
    }

    public function getEmailValeur(): ?string
    {
        return $this->emailValeur;
    }

    public function setEmailValeur(string $emailValeur): self
    {
        $this->emailValeur = $emailValeur;

        return $this;
    }

    public function getEmailOrigine(): ?string
    {
        return $this->emailOrigine;
    }

    public function setEmailOrigine(string $emailOrigine): self
    {
        $this->emailOrigine = $emailOrigine;

        return $this;
    }

    public function getEmailId(): ?string
    {
        return $this->emailId;
    }

    public function setEmailId(string $emailId): self
    {
        $this->emailId = $emailId;

        return $this;
    }

    public function getStatutHabitationVal(): ?string
    {
        return $this->statutHabitationVal;
    }

    public function setStatutHabitationVal(string $statutHabitationVal): self
    {
        $this->statutHabitationVal = $statutHabitationVal;

        return $this;
    }

    public function getStatutHabitationOrigine(): ?string
    {
        return $this->statutHabitationOrigine;
    }

    public function setStatutHabitationOrigine(string $statutHabitationOrigine): self
    {
        $this->statutHabitationOrigine = $statutHabitationOrigine;

        return $this;
    }

    public function getStatutHabitationId(): ?string
    {
        return $this->statutHabitationId;
    }

    public function setStatutHabitationId(string $statutHabitationId): self
    {
        $this->statutHabitationId = $statutHabitationId;

        return $this;
    }

    public function getTypeHabitatVal(): ?string
    {
        return $this->typeHabitatVal;
    }

    public function setTypeHabitatVal(string $typeHabitatVal): self
    {
        $this->typeHabitatVal = $typeHabitatVal;

        return $this;
    }

    public function getTypeHabitatOrigine(): ?string
    {
        return $this->typeHabitatOrigine;
    }

    public function setTypeHabitatOrigine(string $typeHabitatOrigine): self
    {
        $this->typeHabitatOrigine = $typeHabitatOrigine;

        return $this;
    }

    public function getTypeHabitatId(): ?string
    {
        return $this->typeHabitatId;
    }

    public function setTypeHabitatId(string $typeHabitatId): self
    {
        $this->typeHabitatId = $typeHabitatId;

        return $this;
    }

    public function getCspVal(): ?string
    {
        return $this->cspVal;
    }

    public function setCspVal(string $cspVal): self
    {
        $this->cspVal = $cspVal;

        return $this;
    }

    public function getCspOrigine(): ?string
    {
        return $this->cspOrigine;
    }

    public function setCspOrigine(string $cspOrigine): self
    {
        $this->cspOrigine = $cspOrigine;

        return $this;
    }

    public function getCspId(): ?string
    {
        return $this->cspId;
    }

    public function setCspId(string $cspId): self
    {
        $this->cspId = $cspId;

        return $this;
    }


}
