<?php
class TennisGame
{
    public string $score = '';

    public function getScore($player1Name, $player2Name, $player1Score, $player2Score)
    {
        if ($player1Score == $player2Score) {
            $this->score = $this->getEvenScore($player1Score);
        } else if ($player1Score >= 4 || $player2Score >= 4) {
            $this->score = $this->getAdvantageOrWinScore($player1Score, $player2Score);
        } else {
            $this->score = $this->getRegularScore($player1Score) . "-" . $this->getRegularScore($player2Score);
        }
    }

    private function getEvenScore($score)
    {
        switch ($score) {
            case 0:
                return "Love-All";
            case 1:
                return "Fifteen-All";
            case 2:
                return "Thirty-All";
            case 3:
                return "Forty-All";
            default:
                return "Deuce";
        }
    }

    private function getAdvantageOrWinScore($player1Score, $player2Score)
    {
        $minusResult = $player1Score - $player2Score;
        if ($minusResult == 1) return "Advantage player1";
        if ($minusResult == -1) return "Advantage player2";
        if ($minusResult >= 2) return "Win for player1";
        return "Win for player2";
    }

    private function getRegularScore($score)
    {
        switch ($score) {
            case 0:
                return "Love";
            case 1:
                return "Fifteen";
            case 2:
                return "Thirty";
            case 3:
                return "Forty";
        }
    }

    public function __toString(): string
    {
        return $this->score;
    }
}
