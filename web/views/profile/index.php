<?php
class TeamMember
{
    public $name;
    public $imgSrc;
    public $desc;
    public $links;

    function __construct($name = "", $imgSrc = "", $desc = array(), $links = array())
    {
        $this->name = $name;
        $this->imgSrc = $imgSrc;
        $this->desc = $desc;
        $this->links = $links;
    }
}
$team = array(
    "agda" => new TeamMember(),
    "ben" => new TeamMember(
        "Benjamin Benson",
        "assets/img/bradley_and_me.png",
        array(
            "My name is Benjamin Benson, and I am a senior Computer Science major at the University of Houston Downtown, tutor for Trilogy Education’s full-stack web development Bootcamp, and intern at Heavy Construction Software Solutions on the platform team. I am excited to continue developing my skills as a software developer with aspirations of becoming a cloud engineer by building a Kubernetes cluster on Raspberry Pis to run both as a network file storage and web server for my own web pages and investigate load balancing methodologies by simulating large network requests.",
            "Aside from software development, in November 2020, my wife Laura and I welcomed our first baby into the world. His name is Bradley and he has captured our hearts. We have enjoyed watching him grow over the last few months and look forward to each next milestone. Before COVID-19, I enjoyed working out at Baby Bull Boxing gym, where I enjoyed both the physical and mental challenges it presented. Now I am finding my socially distanced workout “groove” on a Peloton bike and taking walks with my family. I am an Eagle Scout and my other hobbies include a love for the outdoors and archery."
        ),
        array(
            "GitHub" => "https://github.com/Bensonb10",
            "LinkedIn" => "https://www.linkedin.com/in/benjamin-benson/"
        )
    ),
    "dat" => new TeamMember(),
    "eric" => new TeamMember(),
);
$__self = $team[$_GET["name"]];
?>
<main>
    <img src="<?php echo $__self->imgSrc; ?>" alt="" class="profile-picture">
    <?php
    foreach ($__self->desc as $para) {
        echo $para;
    }
    ?>

    <ul>
        <?php
        foreach ($__self->links as $link) {
            echo "<li>" . $link . "</li>";
        }
        ?>
    </ul>
</main>