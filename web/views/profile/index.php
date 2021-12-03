<?php
class TeamMember
{
    public $name;
    public $imgSrc;
    public $desc;
    public $links;

    function __construct($name = "", $imgSrc = "", $desc = "", $links = "")
    {
        $this->name = $name;
        $this->imgSrc = $imgSrc;
        $this->desc = $desc;
        $this->links = $links;
    }
}
$team = array(
    "agda" => new TeamMember(),
    "ben" => new TeamMember(),
    "dat" => new TeamMember(),
    "eric" => new TeamMember(),
);
$__self = $team[$_GET["name"]];
?>
<main>
</main>