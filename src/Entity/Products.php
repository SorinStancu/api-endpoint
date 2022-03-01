<?php

namespace App\Entity;

use App\Repository\ProductsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductsRepository::class)
 */
class Products
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", length=1)
     */
    private $id_lang;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $cod;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $tip;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $idc;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $filtre;

    /**
     * @ORM\Column(type="integer", length=11)
     */
    private $id_prod;

    /**
     * @ORM\Column(type="integer", length=11)
     */
    private $id_furn;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pack;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $linkpack;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $denumire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $keywords;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $pret_vechi;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $pret;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $ron;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $rontva;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $detalii;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $disponibil;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_status;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $altimg;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $pdf;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tehnice;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pachet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $optiuni;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titlu_bonus;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bonus;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $poz;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $promo;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $home;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $bonus_enum;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $sale;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $nou;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $barapromo;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $poz_barapromo;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $umanitara;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $discount;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $farapret;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $preturi;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $activ;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $stoc;

    /**
     * @ORM\Column(type="datetime")
     */
    private $data;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdLang(): ?string
    {
        return $this->id_lang;
    }

    public function setIdLang(string $id_lang): self
    {
        $this->id_lang = $id_lang;

        return $this;
    }

    public function getCod(): ?string
    {
        return $this->cod;
    }

    public function setCod(string $cod): self
    {
        $this->cod = $cod;

        return $this;
    }

    public function getTip(): ?string
    {
        return $this->tip;
    }

    public function setTip(string $tip): self
    {
        $this->tip = $tip;

        return $this;
    }

    public function getIdc(): ?string
    {
        return $this->idc;
    }

    public function setIdc(string $idc): self
    {
        $this->idc = $idc;

        return $this;
    }

    public function getFiltre(): ?string
    {
        return $this->filtre;
    }

    public function setFiltre(string $filtre): self
    {
        $this->filtre = $filtre;

        return $this;
    }

    public function getIdProd(): ?string
    {
        return $this->id_prod;
    }

    public function setIdProd(string $id_prod): self
    {
        $this->id_prod = $id_prod;

        return $this;
    }

    public function getIdFurn(): ?string
    {
        return $this->id_furn;
    }

    public function setIdFurn(string $id_furn): self
    {
        $this->id_furn = $id_furn;

        return $this;
    }

    public function getPack(): ?string
    {
        return $this->pack;
    }

    public function setPack(string $pack): self
    {
        $this->pack = $pack;

        return $this;
    }

    public function getLinkpack(): ?string
    {
        return $this->linkpack;
    }

    public function setLinkpack(string $linkpack): self
    {
        $this->linkpack = $linkpack;

        return $this;
    }

    public function getDenumire(): ?string
    {
        return $this->denumire;
    }

    public function setDenumire(string $denumire): self
    {
        $this->denumire = $denumire;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPretVechi(): ?string
    {
        return $this->pret_vechi;
    }

    public function setPretVechi(string $pret_vechi): self
    {
        $this->pret_vechi = $pret_vechi;

        return $this;
    }

    public function getPret(): ?string
    {
        return $this->pret;
    }

    public function setPret(string $pret): self
    {
        $this->pret = $pret;

        return $this;
    }

    public function getRon(): ?string
    {
        return $this->ron;
    }

    public function setRon(string $ron): self
    {
        $this->ron = $ron;

        return $this;
    }

    public function getRontva(): ?string
    {
        return $this->rontva;
    }

    public function setRontva(string $rontva): self
    {
        $this->rontva = $rontva;

        return $this;
    }

    public function getDetalii(): ?string
    {
        return $this->detalii;
    }

    public function setDetalii(string $detalii): self
    {
        $this->detalii = $detalii;

        return $this;
    }

    public function getDescriere(): ?string
    {
        return $this->descriere;
    }

    public function setDescriere(string $descriere): self
    {
        $this->descriere = $descriere;

        return $this;
    }

    public function getDisponibil(): ?string
    {
        return $this->disponibil;
    }

    public function setDisponibil(string $disponibil): self
    {
        $this->disponibil = $disponibil;

        return $this;
    }

    public function getIdStatus(): ?string
    {
        return $this->id_status;
    }

    public function setIdStatus(string $id_status): self
    {
        $this->id_status = $id_status;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getAltimg(): ?string
    {
        return $this->altimg;
    }

    public function setAltimg(string $altimg): self
    {
        $this->altimg = $altimg;

        return $this;
    }

    public function getPdf(): ?string
    {
        return $this->pdf;
    }

    public function setPdf(string $pdf): self
    {
        $this->pdf = $pdf;

        return $this;
    }

    public function getTehnice(): ?string
    {
        return $this->tehnice;
    }

    public function setTehnice(string $tehnice): self
    {
        $this->tehnice = $tehnice;

        return $this;
    }

    public function getPachet(): ?string
    {
        return $this->pachet;
    }

    public function setPachet(string $pachet): self
    {
        $this->pachet = $pachet;

        return $this;
    }

    public function getOptiuni(): ?string
    {
        return $this->optiuni;
    }

    public function setOptiuni(string $optiuni): self
    {
        $this->optiuni = $optiuni;

        return $this;
    }

    public function getTitluBonus(): ?string
    {
        return $this->titlu_bonus;
    }

    public function setTitluBonus(string $titlu_bonus): self
    {
        $this->titlu_bonus = $titlu_bonus;

        return $this;
    }

    public function getBonus(): ?string
    {
        return $this->bonus;
    }

    public function setBonus(string $bonus): self
    {
        $this->bonus = $bonus;

        return $this;
    }

    public function getPoz(): ?string
    {
        return $this->poz;
    }

    public function setPoz(string $poz): self
    {
        $this->poz = $poz;

        return $this;
    }

    public function getPromo(): ?string
    {
        return $this->promo;
    }

    public function setPromo(string $promo): self
    {
        $this->promo = $promo;

        return $this;
    }

    public function getHome(): ?string
    {
        return $this->home;
    }

    public function setHome(string $home): self
    {
        $this->home = $home;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getBonusEnum(): ?string
    {
        return $this->bonus_enum;
    }

    public function setBonusEnum(string $bonus_enum): self
    {
        $this->bonus_enum = $bonus_enum;

        return $this;
    }

    public function getSale(): ?string
    {
        return $this->sale;
    }

    public function setSale(string $sale): self
    {
        $this->sale = $sale;

        return $this;
    }

    public function getNou(): ?string
    {
        return $this->nou;
    }

    public function setNou(string $nou): self
    {
        $this->nou = $nou;

        return $this;
    }

    public function getBarapromo(): ?string
    {
        return $this->barapromo;
    }

    public function setBarapromo(string $barapromo): self
    {
        $this->barapromo = $barapromo;

        return $this;
    }

    public function getPozBarapromo(): ?string
    {
        return $this->poz_barapromo;
    }

    public function setPozBarapromo(string $poz_barapromo): self
    {
        $this->poz_barapromo = $poz_barapromo;

        return $this;
    }

    public function getUmanitara(): ?string
    {
        return $this->umanitara;
    }

    public function setUmanitara(string $umanitara): self
    {
        $this->umanitara = $umanitara;

        return $this;
    }

    public function getDiscount(): ?string
    {
        return $this->discount;
    }

    public function setDiscount(string $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function getFarapret(): ?string
    {
        return $this->farapret;
    }

    public function setFarapret(string $farapret): self
    {
        $this->farapret = $farapret;

        return $this;
    }

    public function getPreturi(): ?string
    {
        return $this->preturi;
    }

    public function setPreturi(string $preturi): self
    {
        $this->preturi = $preturi;

        return $this;
    }

    public function getActiv(): ?string
    {
        return $this->activ;
    }

    public function setActiv(string $activ): self
    {
        $this->activ = $activ;

        return $this;
    }

    public function getStoc(): ?string
    {
        return $this->stoc;
    }

    public function setStoc(string $stoc): self
    {
        $this->stoc = $stoc;

        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }
}