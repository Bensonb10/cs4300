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
    "agda" => new TeamMember(
        "Agda Esperanza",
        "assets/img/agdaEsperanza.jpg",
        array(
        " My name is Agda Esperanza, I am a senior at the University of Houston-Downtown pursuing a degree in computer science with a minor in Mathematics. I work as a peer mentor for the Gator Success Center where I help guide freshman students in their first semester of college, I am also a member and peer leader for Scholars Academy. Currently I work as an office assistant at Applied Business and Technology Center at UHD that focus on continuing education program.",
        "Aside from school, I was born and raised in Brazil and moved to the US in 2014. Moving the US was one of the hardest and greatest experience to have happened to me. I had the opportunity to learn a new language, meet new people and even meet the love of my life. My husband and I have been married for three years and we could not be happier."
        ),
        array(
            "LinkedIn" =>"https://www.linkedin.com/in/agdaesperanza/",
            "GitHub" => "https://github.com/agdahelena"
        )
    ),
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
        echo "<p>" . $para . "</p>";
    }
    ?>

    <ul>
        <?php
        foreach ($__self->links as $link => $value) {
            echo "<li> <a href='" . $value . "'>" . $link . "</a></li>";
        }
        ?>
    </ul>
</main>