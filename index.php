<?php $pageTitle = "ISKCON München - Sri Sri Gaura Nitai"; include 'header.php'; ?>

    <!-- FOTO GAURA NITAI -->
    <section class="card hero-card">
      <div class="image-container">
        <img src="images/gaura-nitai.jpg" alt="Sri Sri Gaura Nitai" class="responsive-img">
        <div class="image-caption">Sri Sri Gaura Nitai</div>
      </div>
    </section>

    <!-- ZITAT -->
    <section class="card quote-card">
      <blockquote class="quote">
        „Chant process: Hare Krishna, Hare Krishna, Krishna Krishna, Hare Hare / Hare Rama, Hare Rama, Rama Rama, Hare Hare – und sei glücklich!“
      </blockquote>
      <cite class="quote-author">— A.C. Bhaktivedanta Swami Prabhupada</cite>
    </section>

    NÄCHSTES FEST 
    <section class="card event-card">
      <h2 class="section-title">Nächstes Fest</h2>
      <div class="event-content">
        <img src="images/vjas_puja.jpg" alt="Nächstes Tempelfest" class="responsive-img event-img">
        <!--<div class="event-details">
          <h3>Indira Ekadashi</h3>
          <p class="event-date">📅 October 11, 2026</p>
          <p>Ekadashi findet zweimal im Monat am elften Tag nach Vollmond und Neumond statt. 
            An diesem Tag verzichten wir vor allem auf Getreide und Hülsenfrüchte, 
            um den Körper zu entlasten und geistige Klarheit zu fördern. 
            Neben der körperlichen Reinigung dient das Fasten vor allem der spirituellen Einkehr 
            und der Vertiefung der Hingabe an Krishna.</p>
        </div>-->
      </div>
    </section>

    <!-- JEDEN SONNTAG IM TEMPEL -->
    <section class="card sunday-card">
      <h2 class="section-title">Jeden Sonntag im Tempel</h2>
      
      <ul class="schedule-list">
        <li><span class="time">13:00 - 14:00 Uhr</span> <span class="activity"> Kirtan</span></li>
        <li><span class="time">14:00 - 15:00 Uhr</span> <span class="activity"> Vortrag</span></li>
        <li><span class="time">15:00 - 15:30 Uhr</span> <span class="activity"> Gaura Arati</span></li>
        <li><span class="time">ab 15:30 Uhr</span> <span class="activity"> Prasadam</span></li>
      </ul>
    </section>

    <!-- HARINAMA IN MÜNCHEN -->
    <section class="card video-card">
  <h2 class="section-title">Harinama in München</h2>
  <div class="event-details">
    <h3>Nächste Harinama</h3>
    <p class="event-date">📅 October 17, 2026</p>
    <p>Von 13:30 bis 17:30, Sendlingerstr. 19 in München.</p>
  </div>
  <div class="video-container">
    <video controls poster="images/harinama_rain.jpg" class="responsive-video">
      <source src="videos/harinama_rain.mp4" type="video/mp4">
      Ihr Browser unterstützt das Video-Tag leider nicht.
    </video>
  </div>
  
</section>

    <!-- EURE HILFE IST GEFRAGT -->
    <section class="card help-card">
      <h2 class="section-title">Eure Hilfe ist gefragt!</h2>
      <p>Der Tempel lebt durch die Hingabe und Unterstützung der Gemeinschaft. Ob bei der Küchendienst-Mithilfe, Blumengirlanden-Binden oder durch Spenden – jede helfende Hand ist herzlich willkommen!</p>
      <a href="spenden.php" class="btn btn-primary">Jetzt mithelfen & spenden</a>
    </section>

    
    
    <!-- ANFAHRT -->
    <section class="card info-card">
      <h2 class="section-title">Anfahrt</h2>
      <p><strong>Adresse:</strong></p>
      <p>Verein für Vedische Kultur e.V.<br>Ostring 7<br> 85614 Eglharting</p>
      <p class="small-text">Erreichbar mit öffentlichen Verkehrsmitteln: <br>S-Bahn Linie 6.</p>
    </section>

<?php include 'footer.php'; ?>
