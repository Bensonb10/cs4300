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
        "assets/img/agda.jpg",
        array(
            "My name is Agda Esperanza, I am a senior at the University of Houston-Downtown pursuing a degree in computer science with a minor in Mathematics. I work as a peer mentor for the Gator Success Center where I help guide freshman students in their first semester of college, I am also a member and peer leader for Scholars Academy. Currently I work as an office assistant at Applied Business and Technology Center at UHD that focus on continuing education program.",
            "Aside from school, I was born and raised in Brazil and moved to the US in 2014. Moving the US was one of the hardest and greatest experience to have happened to me. I had the opportunity to learn a new language, meet new people and even meet the love of my life. My husband and I have been married for three years and we could not be happier."
        ),
        array(
            "GitHub" => "https://github.com/agdahelena",
            "LinkedIn" => "https://www.linkedin.com/in/agdaesperanza/"
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
    "dat" => new TeamMember(
        "Dat Nguyen",
        "assets/img/dat.jpg",
        array(
            "Hi! My name is Dat Nguyen, current UHD senior student of Computer Science major. I am very glad when I can have a chance to be student in this class. My hobbies are traveling, reading books to learn something new about cultures, foods, sciences, and programming. This is my fourth year to live in Houston as an international student. Since I came to the U.S, I learn a lot of new things about lifestyle, thinking and cultures. They are very important elements to help me to have a more independent mind instead of stereotyping everything in school and society. Therefore, I decided to choose Computer Science major, because it is very useful to me and can bring great values to our community in the future. My future plan is having an internship as an Software Engineer as well as developing technical skills in data analysis before becoming a data analyst or then, a data scientist. In this class, this is a great opportunity for me to learn about Web programming from my professor and classmates. I hope that I can develop an good personal website for my own after this class. Moreover, who knows whether I may become a Front End or Back End programmer after this course."
        ),
        array(
            "GitHub" => "https://github.com/nguyend226",
            "LinkedIn" => "https://www.linkedin.com/in/dat-nguyen-8a4823208/"
        )
    ),
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