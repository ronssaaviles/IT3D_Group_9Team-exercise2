<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Profile</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <h1>Introducing Our Team</h1>
    </header>


    <!-- Hindi ko na ipapaliwanag to guys, same lang to dun sa version 3. Naiiba lang dito is PHP yung gamit at
         ginamit ko yung $profiles para dun ilagay yung details about satin. -->
    <?php
    $profiles = [
        "member1" => [
            "name" => "Ronnie Aviles",
            "image" => "image/Ronnie.JPG",
            "description" => "Ronnie is an integral member of our team with expertise in Robotics. He has contributed to this website project as our Leader. Outside of work, Ronnie enjoys online games and sports.",
            "github" => "https://github.com/ronssaaviles",
            "linkedin" => "https://www.linkedin.com/in/ronnie-aviles-55a696322/",
            "facebook" => "https://www.facebook.com/ronss.2003"
        ],
        "member2" => [
            "name" => "Covie Marfil",
            "image" => "image/Covie.JPG",
            "description" => "Covie specializes in Web Development. His contributions to this website project are noteworthy. Outside of work, Covie enjoys Photography and App development.",
            "github" => "https://github.com/Marfil-Covie",
            "linkedin" => "https://www.linkedin.com/in/covie-marfil-367484322/",
            "facebook" => "https://www.facebook.com/Covie-Marfil/"
        ],
        "member3" => [
            "name" => "Jayve Arenas",
            "image" => "image/Arenas.JPG",
            "description" => "Jayve is known for App Development. He has a strong background in Programming. In his free time, Jayve likes to play sports and online games.",
            "github" => "https://github.com/Jayve23",
            "linkedin" => "www.linkedin.com/in/jayve-arenas-5013332b6",
            "facebook" => "https://www.facebook.com/jabu.arenas.7"
        ],
        "member4" => [
            "name" => "Christian Casera",
            "image" => "image/Casera.JPG",
            "description" => "Christian is a key player in our team with skills in Database Management. His involvement in the website project has been invaluable. Christian’s hobbies include App and System Development.",
            "github" => "https://github.com/Christian-Casera",
            "linkedin" => "https://www.linkedin.com/in/john-casera-072486322/",
            "facebook" => "https://www.facebook.com/johnchristian.casera"
        ],
        "member5" => [
            "name" => "Yuan Erguiza",
            "image" => "image/Yuan.JPG",
            "description" => "Yuan brings a wealth of experience in Programming. His work on this website project has been impressive. Yuan enjoys Robotics and Data Management in his spare time.",
            "github" => "https://github.com/Yuan-Erguiza",
            "linkedin" => "https://www.linkedin.com/in/yuan-erguiza-722ab6322/",
            "facebook" => "https://www.facebook.com/yuan.arguiza"
        ]
    ];
    ?>

    <!-- Eto naman para lumabas yung members dun sa page, same lang din sa version 3 -->
    <section class="team-section">
        <?php foreach ($profiles as $id => $profile) : ?>
            <div class="team-member" id="<?php echo $id; ?>" onclick="showProfile('<?php echo $id; ?>')">
                <img src="<?php echo $profile['image']; ?>" alt="<?php echo $profile['name']; ?>">
                <h2><?php echo $profile['name']; ?></h2>
            </div>
        <?php endforeach; ?>
    </section>


    <!-- Eto naman ay para lumabas yung details ng member na clinick ni user, basta iproprovide nya yung mga dapat nakalagay sa ID. -->
    <section class="profile-section" id="profile-section">
        <div class="profile-content" id="profile-content">
            <img id="profile-image" src="" alt="">
            <div id="profile-description">
                <h2 id="profile-name"></h2>
                <p id="profile-text"></p>
                <div id="social-links">
                    <a id="github-link" href="#" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a id="linkedin-link" href="#" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a id="facebook-link" href="#" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
         
    
    <!-- javarice -->
    <script src="script.js"></script>
</body>
</html>
