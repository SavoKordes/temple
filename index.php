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
       „Gleich und gleich gesellt sich gern. Das ist eine Naturerscheinung. 
       Wenn man sich mit Materialisten abgibt, entwickelt man eine materialistische Neigung;
       wenn man sich mit Devotees abgibt, entwickelt man eine Hingabe zu Krishna.“
      </blockquote>
      <cite class="quote-author">— A.C. Bhaktivedanta Swami Prabhupada</cite>
    </section>

    <!--NÄCHSTES FEST--> 
    <section class="card event-card">
      <h2 class="section-title">Nächstes Fest</h2>
      <div class="event-content">
        <img src="images/Durga.png" alt="Nächstes Tempelfest" class="responsive-img event-img">
        <div class="event-details">
          <h3>Durga Puja</h3>
          <p class="event-date">📅 October 17, 2026</p>
          <p>Durga ist die Personifizierung von Krishnas materieller Energie (Maya),
            die in der materiellen Welt wie eine Hüterin wacht, um die bedingten Seelen 
            durch Prüfungen zur Läuterung zu führen. Das Fest Durga-Puja feiert ihren Sieg 
            über das Böse und erinnert daran, dass all ihre Stärke und Macht ihren Ursprung 
            direkt in Krishna haben. Schon bei Krishnas Erscheinen spielte sie als göttliche
            Energie eine entscheidende Rolle, indem sie den Tyrannen Kamsa vor Krishnas 
            unbesiegbarer Gegenwart warnte. Auch die Gopis von Vrindavan beteten einst zu Durga, 
            um Krishnas Zuneigung zu gewinnen, was ihre erhabene Position als Dienerin des Höchsten
            unterstreicht. Gaudiya Vaishnavas erweisen Durga deshalb tiefen Respekt als eine reine
            Geweihte (Vaishnavi), verehren sie jedoch stets in Verbindung mit ihrer Quelle. Indem man Durga um Segen bittet, erhofft man sich die Befreiung 
            von materieller Illusion, um uneingeschränkte Hingabe zu Krishna zu erlangen.</p>
        </div>
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
  <!--<div class="event-details">
    <h3>Nächste Harinama</h3>
    <p class="event-date">📅 October 10, 2026</p>
    <p>Von 13:30 bis 17:30, Sendlingerstr. 19 in München.</p>
  </div>-->
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
      <p class="small-text">Erreichbar mit öffentlichen Verkehrsmitteln: <br>S-Bahn Linie 6, Richtung Ebersberg.</p>
    </section>

<?php include 'footer.php'; ?>
