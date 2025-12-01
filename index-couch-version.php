<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Home Page' clonable='0'>
  
  <cms:editable name='page_title' label='Page Title' type='text'>
    Mindful Journey Psychology | Psychologist in North Lakes | Telehealth
  </cms:editable>
  
  <cms:editable name='hero_heading' label='Hero Heading' type='text'>
    Mindful Journey Psychology - North Lakes
  </cms:editable>
  
  <cms:editable name='hero_subtext' label='Hero Subtext' type='textarea'>
    Professional Psychology and Therapy Services in North Lakes, QLD
  </cms:editable>
  
  <cms:editable name='services_intro' label='Services Introduction' type='richtext'>
    Our North Lakes psychology practice offers evidence-based therapy for a range of mental health needs:
  </cms:editable>
  
  <cms:editable name='about_intro' label='About Introduction' type='richtext'>
    I am Dilini perera, registered psychologist in North lakes; QLD 4509.
  </cms:editable>
  
  <cms:editable name='about_paragraph1' label='About Paragraph 1' type='richtext'>
    As a registered psychologist based in North Lakes, I provide professional psychological services to individuals across the lifespan — from young children to adults. My practice offers both in-person sessions at our North Lakes clinic and <strong>Telehealth options</strong> for greater convenience.
  </cms:editable>
  
  <cms:editable name='about_paragraph2' label='About Paragraph 2' type='richtext'>
    Throughout my career, I've worked with diverse mental health presentations including anxiety, depression, PTSD, addiction, anger management, personality challenges, domestic violence and individuals involved in the forensic system.
  </cms:editable>
  
  <cms:editable name='contact_phone' label='Phone Number' type='text'>
    0481 578 624
  </cms:editable>
  
  <cms:editable name='contact_email' label='Email' type='text'>
    info@mindfuljourneypsychology.com.au
  </cms:editable>
  
  <cms:editable name='contact_address' label='Address' type='text'>
    Suite 505, 6 North Lakes Drive, North Lakes QLD 4509
  </cms:editable>
  
</cms:template>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><cms:show page_title /></title>
  <meta name="description" content="Licensed psychologist in North Lakes, QLD offering therapy services for children and adults. Work cover approved with Telehealth options available.">
  <meta name="keywords" content="Psychologist, therapy, Neurodevelopmental, Work cover, Psychology, North lakes, Telehealth">
  <meta name="author" content="Mindful Journey Psychology">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://mindfuljourneypsychology.com.au/">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <img src="images/logo-transparent-png.png" alt="Mindful Journey Psychology North Lakes Logo">
    <nav>
      <a href="#services">Services</a>
      <a href="#about">About</a>
      <a href="#booking">Book</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>
  <section class="hero">
    <h1><cms:show hero_heading /></h1>
    <p><cms:show hero_subtext /></p>
    <p>Work Cover Approved | Telehealth Available</p>
    <button onclick="document.getElementById('booking').scrollIntoView({behavior: 'smooth'})">Book an Appointment</button>
  </section>
  <section id="services" class="services">
    <h2>Psychological Services in North Lakes</h2>
    <cms:show services_intro />
    <ul>
      <li><strong>Anxiety & Depression Therapy</strong> - Comprehensive psychological support</li>
      <li><strong>PTSD & Trauma Treatment</strong> - Evidence-based therapeutic approaches</li>
      <li><strong>Neurodevelopmental Services</strong> - Autism & ADHD assessment and therapy (Children 5+)</li>
      <li><strong>Anger Management</strong> - Develop healthier coping strategies</li>
      <li><strong>Perinatal Mental Health</strong> - Support for expectant and new parents</li>
      <li><strong>Addiction & Recovery</strong> - Specialized psychological intervention</li>
    </ul>
    <p>We accept <strong>Work Cover</strong> clients.</p>
  </section>
  <section id="about" class="bio">
    <h2>Meet Your North Lakes Psychologist</h2>
    
    <div class="profile-container">
      <img src="images/profile.jpg" alt="North Lakes Psychologist Portrait" class="profile-image">      <div class="profile-text">
        <cms:show about_intro />
        <cms:show about_paragraph1 />
        <cms:show about_paragraph2 />
      </div>
    </div>
    
    <div class="qualifications">
      <h3>Professional Qualifications</h3>
      <ul>
        <li>Bachelor of Psychological Science (Honours), University of Queensland</li>
        <li>Graduate Certificate in Addiction Studies for Health Professionals, University of Tasmania</li>
        <li>Diploma of Counselling</li>
        <li>Registered Psychologist with AHPRA</li>
        <li>Work Cover Approved</li>
      </ul>
    </div>
      <p>I have a strong interest in human behaviour and am passionate about helping people grow through what they're going through. My therapy approach uses evidence-based psychological practices within a person-centred framework that respects each individual's unique journey.</p>
    <p>Specialising in <strong>Neurodevelopmental services</strong> for children aged 5+, I provide psychological support for challenges like ASD, ADHD, emotional regulation, trauma, school refusal, and bullying. My North Lakes psychology practice also offers specialized services for expectant mothers and families of young children in the perinatal stage.</p>
  </section>
  <section id="booking" class="booking">
    <h2>Book a Psychology Session in North Lakes or via Telehealth</h2>
    <p>In-person appointments at our North Lakes clinic and <strong>Telehealth sessions</strong> are available. After-hours and weekend appointments on request.</p>
    <p>We accept a range of payment options.</p>
    <p><strong>Address:</strong> <cms:show contact_address /></p>
    <p><strong>Phone:</strong> <cms:show contact_phone /></p>
    <p><strong>Email:</strong> <cms:show contact_email /></p>
    <p><strong>Facebook:</strong> <a href="https://www.facebook.com/profile.php?id=61578217200492" target="_blank">Follow us on Facebook</a></p>
    <button onclick="window.location.href='mailto:<cms:show contact_email />'">Email to Book</button>
  </section>  <footer id="contact">
    <p>&copy; Mindful Journey Psychology | 4/12 Discovery Drive, North Lakes QLD 4509 | ABN: 76 226 164 700</p>
    <p>Registered Psychologist | Work Cover Approved | Telehealth Available</p>
    <p><a href="index.php">Home</a> | <a href="privacy.php">Privacy Policy</a> | <a href="terms.php">Terms & Conditions</a> | <a href="https://www.facebook.com/profile.php?id=61578217200492" target="_blank">Facebook</a></p>
    <p>
  <!-- Professional verification provided by Psychology Today -->
  <a href="https://www.psychologytoday.com/profile/1562467" class="sx-verified-seal"></a>
  <script type="text/javascript" src="https://member.psychologytoday.com/verified-seal.js" data-badge="14" data-id="1562467" data-code="aHR0cHM6Ly93d3cucHN5Y2hvbG9neXRvZGF5LmNvbS9hcGkvdmVyaWZpZWQtc2VhbC9zZWFscy8xNC9wcm9maWxlLzE1NjI0Njc/Y2FsbGJhY2s9c3hjYWxsYmFjaw=="></script>
  <!-- End Verification -->
   </p>
  </footer>
</body>
</html>
<?php COUCH::invoke(); ?>
