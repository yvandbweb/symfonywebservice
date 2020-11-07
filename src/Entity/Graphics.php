<?php

namespace App\Entity;

use App\Repository\GraphicsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GraphicsRepository::class)
 */
class Graphics
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $legendType;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $graphBackgroundColor;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $graphFontColor;

    /**
     * @ORM\OneToMany(targetEntity=Graphdata::class, mappedBy="fkGraphics")
     */
    private $graphdatas;

    public function __construct()
    {
        $this->graphdatas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getLegendType(): ?string
    {
        return $this->legendType;
    }

    public function setLegendType(string $legendType): self
    {
        $this->legendType = $legendType;

        return $this;
    }

    public function getGraphBackgroundColor(): ?string
    {
        return $this->graphBackgroundColor;
    }

    public function setGraphBackgroundColor(string $graphBackgroundColor): self
    {
        $this->graphBackgroundColor = $graphBackgroundColor;

        return $this;
    }

    public function getGraphFontColor(): ?string
    {
        return $this->graphFontColor;
    }

    public function setGraphFontColor(string $graphFontColor): self
    {
        $this->graphFontColor = $graphFontColor;

        return $this;
    }

    /**
     * @return Collection|Graphdata[]
     */
    public function getGraphdatas(): Collection
    {
        return $this->graphdatas;
    }

    public function addGraphdata(Graphdata $graphdata): self
    {
        if (!$this->graphdatas->contains($graphdata)) {
            $this->graphdatas[] = $graphdata;
            $graphdata->setFkGraphics($this);
        }

        return $this;
    }

    public function removeGraphdata(Graphdata $graphdata): self
    {
        if ($this->graphdatas->removeElement($graphdata)) {
            // set the owning side to null (unless already changed)
            if ($graphdata->getFkGraphics() === $this) {
                $graphdata->setFkGraphics(null);
            }
        }

        return $this;
    }
}
