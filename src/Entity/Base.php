<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BaseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Base
 *
 * @ORM\Table(name="base", indexes={@ORM\Index(name="F_NGROUP", columns={"F_NGROUP", "F_DUP"}), @ORM\Index(name="I_NGROUP", columns={"I_NGroup"}), @ORM\Index(name="idx_age", columns={"age"}), @ORM\Index(name="idx_cp", columns={"cp"}), @ORM\Index(name="idx_DATEMODIF", columns={"DATEMODIF"}), @ORM\Index(name="idx_ident", columns={"ident"}), @ORM\Index(name="idx_insee", columns={"insee"}), @ORM\Index(name="idx_inseeIris", columns={"inseeIris"}), @ORM\Index(name="idx_iris", columns={"iris"}), @ORM\Index(name="idx_nfoyer", columns={"nfoyer"}), @ORM\Index(name="idx_pro", columns={"pro"}), @ORM\Index(name="idx_sex", columns={"sexe"}), @ORM\Index(name="idx_TYPEMODIF", columns={"TYPEMODIF"}), @ORM\Index(name="matchmi", columns={"matchmi"})})
 * @ORM\Entity
 * 
 * @ApiResource()
 * @ORM\Entity(repositoryClass=BaseRepository::class)
 *
 */
class Base
{
    /**
     * @var int
     *
     * @ORM\Column(name="ident", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ident;

    /**
     * @var string
     *
     * @ORM\Column(name="civ", type="string", length=30, nullable=false)
     */
    private $civ;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=150, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=150, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adr1", type="string", length=38, nullable=false)
     */
    private $adr1;

    /**
     * @var string
     *
     * @ORM\Column(name="adr2", type="string", length=38, nullable=false)
     */
    private $adr2;

    /**
     * @var string
     *
     * @ORM\Column(name="adr3", type="string", length=38, nullable=false)
     */
    private $adr3;

    /**
     * @var string
     *
     * @ORM\Column(name="adr4", type="string", length=38, nullable=false)
     */
    private $adr4;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=false)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=32, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=10, nullable=false)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="insee", type="string", length=5, nullable=false)
     */
    private $insee;

    /**
     * @var string
     *
     * @ORM\Column(name="iris", type="string", length=4, nullable=false, options={"default"="000"})
     */
    private $iris = '000';

    /**
     * @var string
     *
     * @ORM\Column(name="inseeIris", type="string", length=9, nullable=false)
     */
    private $inseeiris;

    /**
     * @var string
     *
     * @ORM\Column(name="irisCanton", type="string", length=2, nullable=false)
     */
    private $iriscanton;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $sexe;

    /**
     * @var int
     *
     * @ORM\Column(name="nfoyer", type="integer", nullable=false)
     */
    private $nfoyer;

    /**
     * @var string
     *
     * @ORM\Column(name="pro", type="string", length=5, nullable=false)
     */
    private $pro;

    /**
     * @var string
     *
     * @ORM\Column(name="opposeMD", type="string", length=3, nullable=false, options={"default"="Non"})
     */
    private $opposemd = 'Non';

    /**
     * @var string
     *
     * @ORM\Column(name="matchmi", type="string", length=100, nullable=false)
     */
    private $matchmi;

    /**
     * @var string
     *
     * @ORM\Column(name="hexacle", type="string", length=50, nullable=false)
     */
    private $hexacle;

    /**
     * @var bool
     *
     * @ORM\Column(name="tailleAglo", type="boolean", nullable=false)
     */
    private $tailleaglo;

    /**
     * @var string
     *
     * @ORM\Column(name="DATEMODIF", type="string", length=10, nullable=false)
     */
    private $datemodif;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPEMODIF", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $typemodif;

    /**
     * @var string
     *
     * @ORM\Column(name="ORIGINE", type="string", length=50, nullable=false)
     */
    private $origine;

    /**
     * @var string
     *
     * @ORM\Column(name="F_NGROUP", type="string", length=50, nullable=false)
     */
    private $fNgroup;

    /**
     * @var string
     *
     * @ORM\Column(name="I_NGroup", type="string", length=50, nullable=false)
     */
    private $iNgroup;

    /**
     * @var string
     *
     * @ORM\Column(name="F_DUP", type="string", length=10, nullable=false)
     */
    private $fDup;

    /**
     * @var string
     *
     * @ORM\Column(name="I_DUP", type="string", length=5, nullable=false)
     */
    private $iDup;

    public function getIdent(): ?int
    {
        return $this->ident;
    }

    public function getCiv(): ?string
    {
        return $this->civ;
    }

    public function setCiv(string $civ): self
    {
        $this->civ = $civ;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdr1(): ?string
    {
        return $this->adr1;
    }

    public function setAdr1(string $adr1): self
    {
        $this->adr1 = $adr1;

        return $this;
    }

    public function getAdr2(): ?string
    {
        return $this->adr2;
    }

    public function setAdr2(string $adr2): self
    {
        $this->adr2 = $adr2;

        return $this;
    }

    public function getAdr3(): ?string
    {
        return $this->adr3;
    }

    public function setAdr3(string $adr3): self
    {
        $this->adr3 = $adr3;

        return $this;
    }

    public function getAdr4(): ?string
    {
        return $this->adr4;
    }

    public function setAdr4(string $adr4): self
    {
        $this->adr4 = $adr4;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getInsee(): ?string
    {
        return $this->insee;
    }

    public function setInsee(string $insee): self
    {
        $this->insee = $insee;

        return $this;
    }

    public function getIris(): ?string
    {
        return $this->iris;
    }

    public function setIris(string $iris): self
    {
        $this->iris = $iris;

        return $this;
    }

    public function getInseeiris(): ?string
    {
        return $this->inseeiris;
    }

    public function setInseeiris(string $inseeiris): self
    {
        $this->inseeiris = $inseeiris;

        return $this;
    }

    public function getIriscanton(): ?string
    {
        return $this->iriscanton;
    }

    public function setIriscanton(string $iriscanton): self
    {
        $this->iriscanton = $iriscanton;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getNfoyer(): ?int
    {
        return $this->nfoyer;
    }

    public function setNfoyer(int $nfoyer): self
    {
        $this->nfoyer = $nfoyer;

        return $this;
    }

    public function getPro(): ?string
    {
        return $this->pro;
    }

    public function setPro(string $pro): self
    {
        $this->pro = $pro;

        return $this;
    }

    public function getOpposemd(): ?string
    {
        return $this->opposemd;
    }

    public function setOpposemd(string $opposemd): self
    {
        $this->opposemd = $opposemd;

        return $this;
    }

    public function getMatchmi(): ?string
    {
        return $this->matchmi;
    }

    public function setMatchmi(string $matchmi): self
    {
        $this->matchmi = $matchmi;

        return $this;
    }

    public function getHexacle(): ?string
    {
        return $this->hexacle;
    }

    public function setHexacle(string $hexacle): self
    {
        $this->hexacle = $hexacle;

        return $this;
    }

    public function getTailleaglo(): ?bool
    {
        return $this->tailleaglo;
    }

    public function setTailleaglo(bool $tailleaglo): self
    {
        $this->tailleaglo = $tailleaglo;

        return $this;
    }

    public function getDatemodif(): ?string
    {
        return $this->datemodif;
    }

    public function setDatemodif(string $datemodif): self
    {
        $this->datemodif = $datemodif;

        return $this;
    }

    public function getTypemodif(): ?string
    {
        return $this->typemodif;
    }

    public function setTypemodif(string $typemodif): self
    {
        $this->typemodif = $typemodif;

        return $this;
    }

    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setOrigine(string $origine): self
    {
        $this->origine = $origine;

        return $this;
    }

    public function getFNgroup(): ?string
    {
        return $this->fNgroup;
    }

    public function setFNgroup(string $fNgroup): self
    {
        $this->fNgroup = $fNgroup;

        return $this;
    }

    public function getINgroup(): ?string
    {
        return $this->iNgroup;
    }

    public function setINgroup(string $iNgroup): self
    {
        $this->iNgroup = $iNgroup;

        return $this;
    }

    public function getFDup(): ?string
    {
        return $this->fDup;
    }

    public function setFDup(string $fDup): self
    {
        $this->fDup = $fDup;

        return $this;
    }

    public function getIDup(): ?string
    {
        return $this->iDup;
    }

    public function setIDup(string $iDup): self
    {
        $this->iDup = $iDup;

        return $this;
    }


}
