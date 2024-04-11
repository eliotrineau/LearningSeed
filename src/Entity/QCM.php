<?php

namespace App\Entity;

use App\Repository\QCMRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QCMRepository::class)]
class QCM
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomQCM = null;

    #[ORM\Column(nullable: true)]
    private ?int $score = null;

    #[ORM\Column(length: 255)]
    private ?string $question_1 = null;

    #[ORM\Column(length: 255)]
    private ?string $question_2 = null;

    #[ORM\Column(length: 255)]
    private ?string $question_3 = null;

    #[ORM\Column(length: 255)]
    private ?string $question_4 = null;

    #[ORM\Column(length: 255)]
    private ?string $question_5 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_1_1 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_1_2 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_1_3 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_1_4 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_2_1 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_2_2 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_2_3 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_2_4 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_3_1 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_3_2 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_3_3 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_3_4 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_4_1 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_4_2 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_4_3 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_4_4 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_5_1 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_5_2 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_5_3 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_5_4 = null;

    #[ORM\Column(length: 255)]
    private ?string $correctAnswer_1 = null;

    #[ORM\Column(length: 255)]
    private ?string $correctAnswer_2 = null;

    #[ORM\Column(length: 255)]
    private ?string $correctAnswer_3 = null;

    #[ORM\Column(length: 255)]
    private ?string $correctAnswer_4 = null;

    #[ORM\Column(length: 255)]
    private ?string $correctAnswer_5 = null;

    #[ORM\Column(length: 255)]
    private ?string $niveau = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $stockageXML = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomQCM(): ?string
    {
        return $this->nomQCM;
    }

    public function setNomQCM(string $nomQCM): static
    {
        $this->nomQCM = $nomQCM;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(?int $score): static
    {
        $this->score = $score;

        return $this;
    }

    public function getQuestion1(): ?string
    {
        return $this->question_1;
    }

    public function setQuestion1(string $question_1): static
    {
        $this->question_1 = $question_1;

        return $this;
    }

    public function getQuestion2(): ?string
    {
        return $this->question_2;
    }

    public function setQuestion2(string $question_2): static
    {
        $this->question_2 = $question_2;

        return $this;
    }

    public function getQuestion3(): ?string
    {
        return $this->question_3;
    }

    public function setQuestion3(string $question_3): static
    {
        $this->question_3 = $question_3;

        return $this;
    }

    public function getQuestion4(): ?string
    {
        return $this->question_4;
    }

    public function setQuestion4(string $question_4): static
    {
        $this->question_4 = $question_4;

        return $this;
    }

    public function getQuestion5(): ?string
    {
        return $this->question_5;
    }

    public function setQuestion5(string $question_5): static
    {
        $this->question_5 = $question_5;

        return $this;
    }

    public function getReponse11(): ?string
    {
        return $this->reponse_1_1;
    }

    public function setReponse11(string $reponse_1_1): static
    {
        $this->reponse_1_1 = $reponse_1_1;

        return $this;
    }

    public function getReponse12(): ?string
    {
        return $this->reponse_1_2;
    }

    public function setReponse12(string $reponse_1_2): static
    {
        $this->reponse_1_2 = $reponse_1_2;

        return $this;
    }

    public function getReponse13(): ?string
    {
        return $this->reponse_1_3;
    }

    public function setReponse13(string $reponse_1_3): static
    {
        $this->reponse_1_3 = $reponse_1_3;

        return $this;
    }

    public function getReponse14(): ?string
    {
        return $this->reponse_1_4;
    }

    public function setReponse14(string $reponse_1_4): static
    {
        $this->reponse_1_4 = $reponse_1_4;

        return $this;
    }

    public function getReponse21(): ?string
    {
        return $this->reponse_2_1;
    }

    public function setReponse21(string $reponse_2_1): static
    {
        $this->reponse_2_1 = $reponse_2_1;

        return $this;
    }

    public function getReponse22(): ?string
    {
        return $this->reponse_2_2;
    }

    public function setReponse22(string $reponse_2_2): static
    {
        $this->reponse_2_2 = $reponse_2_2;

        return $this;
    }

    public function getReponse23(): ?string
    {
        return $this->reponse_2_3;
    }

    public function setReponse23(string $reponse_2_3): static
    {
        $this->reponse_2_3 = $reponse_2_3;

        return $this;
    }

    public function getReponse24(): ?string
    {
        return $this->reponse_2_4;
    }

    public function setReponse24(string $reponse_2_4): static
    {
        $this->reponse_2_4 = $reponse_2_4;

        return $this;
    }

    public function getReponse31(): ?string
    {
        return $this->reponse_3_1;
    }

    public function setReponse31(string $reponse_3_1): static
    {
        $this->reponse_3_1 = $reponse_3_1;

        return $this;
    }

    public function getReponse32(): ?string
    {
        return $this->reponse_3_2;
    }

    public function setReponse32(string $reponse_3_2): static
    {
        $this->reponse_3_2 = $reponse_3_2;

        return $this;
    }

    public function getReponse33(): ?string
    {
        return $this->reponse_3_3;
    }

    public function setReponse33(string $reponse_3_3): static
    {
        $this->reponse_3_3 = $reponse_3_3;

        return $this;
    }

    public function getReponse34(): ?string
    {
        return $this->reponse_3_4;
    }

    public function setReponse34(string $reponse_3_4): static
    {
        $this->reponse_3_4 = $reponse_3_4;

        return $this;
    }

    public function getReponse41(): ?string
    {
        return $this->reponse_4_1;
    }

    public function setReponse41(string $reponse_4_1): static
    {
        $this->reponse_4_1 = $reponse_4_1;

        return $this;
    }

    public function getReponse42(): ?string
    {
        return $this->reponse_4_2;
    }

    public function setReponse42(string $reponse_4_2): static
    {
        $this->reponse_4_2 = $reponse_4_2;

        return $this;
    }

    public function getReponse43(): ?string
    {
        return $this->reponse_4_3;
    }

    public function setReponse43(string $reponse_4_3): static
    {
        $this->reponse_4_3 = $reponse_4_3;

        return $this;
    }

    public function getReponse44(): ?string
    {
        return $this->reponse_4_4;
    }

    public function setReponse44(string $reponse_4_4): static
    {
        $this->reponse_4_4 = $reponse_4_4;

        return $this;
    }

    public function getReponse51(): ?string
    {
        return $this->reponse_5_1;
    }

    public function setReponse51(string $reponse_5_1): static
    {
        $this->reponse_5_1 = $reponse_5_1;

        return $this;
    }

    public function getReponse52(): ?string
    {
        return $this->reponse_5_2;
    }

    public function setReponse52(string $reponse_5_2): static
    {
        $this->reponse_5_2 = $reponse_5_2;

        return $this;
    }

    public function getReponse53(): ?string
    {
        return $this->reponse_5_3;
    }

    public function setReponse53(string $reponse_5_3): static
    {
        $this->reponse_5_3 = $reponse_5_3;

        return $this;
    }

    public function getReponse54(): ?string
    {
        return $this->reponse_5_4;
    }

    public function setReponse54(string $reponse_5_4): static
    {
        $this->reponse_5_4 = $reponse_5_4;

        return $this;
    }

    public function getCorrectAnswer1(): ?string
    {
        return $this->correctAnswer_1;
    }

    public function setCorrectAnswer1(string $correctAnswer_1): static
    {
        $this->correctAnswer_1 = $correctAnswer_1;

        return $this;
    }

    public function getCorrectAnswer2(): ?string
    {
        return $this->correctAnswer_2;
    }

    public function setCorrectAnswer2(string $correctAnswer_2): static
    {
        $this->correctAnswer_2 = $correctAnswer_2;

        return $this;
    }

    public function getCorrectAnswer3(): ?string
    {
        return $this->correctAnswer_3;
    }

    public function setCorrectAnswer3(string $correctAnswer_3): static
    {
        $this->correctAnswer_3 = $correctAnswer_3;

        return $this;
    }

    public function getCorrectAnswer4(): ?string
    {
        return $this->correctAnswer_4;
    }

    public function setCorrectAnswer4(string $correctAnswer_4): static
    {
        $this->correctAnswer_4 = $correctAnswer_4;

        return $this;
    }

    public function getCorrectAnswer5(): ?string
    {
        return $this->correctAnswer_5;
    }

    public function setCorrectAnswer5(string $correctAnswer_5): static
    {
        $this->correctAnswer_5 = $correctAnswer_5;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): static
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getStockageXML(): ?string
    {
        return $this->stockageXML;
    }

    public function setStockageXML(?string $stockageXML): static
    {
        $this->stockageXML = $stockageXML;

        return $this;
    }
}
