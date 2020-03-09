<?php

/**
 * Class Polytechnic
 */
class Polytechnic
{
    /**
     * @var
     */
    public $instituteName;
    public $instituteLocation;

    /**
     * @param $instituteName
     * @param $instituteLocation
     */
    public function details($instituteName, $instituteLocation)
    {
        $this->instituteName = $instituteName;
        $this->instituteLocation = $instituteLocation;
    }

    /**
     * @return string
     */
    public function welcome()
    {
        return "Welcome to $this->instituteName";
    }
}

$polytechnic = new Polytechnic();
$polytechnic->details('Kurigram Polytechnic Institute', 'Kurigram, Rangpur Division');
echo '<strong>My Institute Name: </strong>' . $polytechnic->instituteName . '<br/>';
echo '<strong>My Institute Location: </strong>' . $polytechnic->instituteLocation . '<br/>';