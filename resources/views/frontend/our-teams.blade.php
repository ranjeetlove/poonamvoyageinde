@extends('frontend.layout.app')
@section('title','teams')
@section('description','Obtenez des informations détaillées sur les voyages en Inde avec un guide, ses attractions touristiques telles que la faune, les stations de montagne, les plages, l aventure, les pèlerins et les circuits inde   , ')
@section('keywords','touropérateurenInde,circuitaurajasthanenInde,voyagesurmesureenInde,guidefrancophoneagencedevoyage')
@section('content')
<style>
   #ourTeamsNew h2{
   font-size: 25px;
   font-weight: 500;
   font-family: inherit;
   }
   #ourTeamsNew p, #ourTeamsNew ul li{
   font-size: 1rem;
   font-weight: 300;
   max-width: 100%;
   margin-bottom: 0px;
   color:#39325a;
   font-family: inherit;
   font-weight: 400;
   }
   :root {
   --white:     #fff;
   --bg:        #f5f2ee;
   --surface:   #f9f8fd;
   --ink:       #1a1714;
   --muted:     #7a7168;
   --accent:    #780f1f;
   --accent-lt: #f7ebeb;
   --border:    #f7ebeb;
   --shadow:    rgba(26,23,20,0.08);
   --radius:    18px;
   }
   /* ── Section wrapper ── */
   .team-section {
   width: 100%;
   max-width: 860px;
   }
   #ourTeamsNew .section-header  {
   padding : 20px 0px; 
   }
   /* ── Header ── */
   .team-header {
   text-align: center;
   margin-bottom: 3.5rem;
   }
   .team-eyebrow {
   display: inline-flex;
   align-items: center;
   gap: 0.6rem;
   font-size: 0.72rem;
   font-weight: 500;
   letter-spacing: 0.18em;
   text-transform: uppercase;
   color: var(--accent);
   margin-bottom: 0.9rem;
   }
   .team-eyebrow::before,
   .team-eyebrow::after {
   content: '';
   display: block;
   width: 28px;
   height: 1px;
   background: var(--accent);
   }
   .team-title {
   font-family: inherit;
   font-size: clamp(2.4rem, 5vw, 3.4rem);
   font-weight: 600;
   line-height: 1.1;
   letter-spacing: -0.01em;
   color: var(--ink);
   }
   .eyebrow{
   color:#7c0c1d;
   font-weight: 500;
   }
   .team-title em {
   font-style: italic;
   color: var(--accent);
   }
   /* ── Card stack ── */
   .team-list {
   list-style: none;
   display: flex;
   flex-direction: column;
   gap: 1.5rem;
   }
   /* ── Individual card ── */
   .bg-color-teams{
   background-color: var(--surface);
   padding-bottom: 20px;
   padding-top: 25px;
   }
   .other-guides{
    padding: 31px;
    width: 90%;
    margin: auto;
    padding-bottom: 50px;
   }
   .team-card-our-teams {
   background: var(--white);
   border: 1px solid var(--border);
   border-radius: var(--radius);
   display: grid;
   grid-template-columns: 250px 1fr;
   overflow: hidden;
   box-shadow: 0 2px 12px var(--shadow);
   transition:
   transform 0.32s cubic-bezier(0.22,1,0.36,1),
   box-shadow 0.32s cubic-bezier(0.22,1,0.36,1);
   position: relative;
   }
   .team-card-our-teams::before {
   content: '';
   position: absolute;
   inset: 0;
   border-radius: var(--radius);
   background: linear-gradient(135deg, var(--accent-lt) 0%, transparent 50%);
   opacity: 0;
   transition: opacity 0.32s ease;
   pointer-events: none;
   }
   .team-card-our-teams:hover {
   transform: translateY(-4px);
   box-shadow: 0 16px 40px rgba(26,23,20,0.14);
   }
   .team-card-our-teams:hover::before { opacity: 0.45; }
   /* ── Photo column ── */
   .member-photo-wrap {
   position: relative;
   overflow: hidden;
   }
   .member-photo-wrap img {
   width: 100%;
   height: 100%;
   object-fit: cover;
   display: block;
   transition: transform 0.6s cubic-bezier(0.22,1,0.36,1);
   filter: grayscale(18%);
   }
   .team-card-our-teams:hover .member-photo-wrap img {
   transform: scale(1.06);
   filter: grayscale(0%);
   }
   /* Decorative accent stripe on left edge */
   .member-photo-wrap::after {
   content: '';
   position: absolute;
   top: 0; left: 0;
   width: 4px; height: 100%;
   background: linear-gradient(to bottom, var(--accent), var(--accent-lt));
   }
   /* ── Content column ── */
   .member-content {
   padding: 1.8rem 2rem;
   display: flex;
   flex-direction: column;
   justify-content: center;
   gap: 0.55rem;
   }
   .member-name {
   font-family: inherit;
   font-size: 1.55rem;
   font-weight: 600;
   line-height: 1.15;
   color: var(--ink);
   letter-spacing: -0.01em;
   }
   .others-guides {
   margin-top: 40px;
   }
   .member-role {
   display: inline-flex;
   align-items: center;
   gap: 0.4rem;
   font-size: 0.72rem;
   font-weight: 500 !important;
   letter-spacing: 0.1em;
   text-transform: uppercase;
   color: var(--accent) !important;
   }
   .member-role::before {
   content: '';
   display: block;
   width: 18px; height: 1px;
   background: var(--accent);
   flex-shrink: 0;
   }
   .member-bio {
   font-size: 1.125rem;
   line-height: 1.5;
   /* color: var(--muted); */
   font-weight: 300;
   max-width: 100%;
   }
   .member-links {
   display: flex;
   gap: 0.6rem;
   margin-top: 0.4rem;
   }
   .member-links a {
   width: 30px; height: 30px;
   border-radius: 50%;
   border: 1px solid var(--border);
   display: flex; align-items: center; justify-content: center;
   color: var(--muted);
   text-decoration: none;
   font-size: 0.75rem;
   transition: background 0.2s, color 0.2s, border-color 0.2s;
   }
   .member-links a:hover {
   background: var(--accent);
   color: #fff;
   border-color: var(--accent);
   }
   .member-meta {
   display: flex;
   flex-wrap: wrap;
   gap: 0.5rem;
   margin-top: 0.1rem;
   }
   .meta-tag {
   display: inline-flex;
   align-items: center;
   gap: 0.35rem;
   font-size: 0.72rem;
   font-weight: 400;
   color: #ffffff;
   background: #fd5156;
   border: 1px solid #fd5156;
   border-radius: 100px;
   padding: 0.22rem 0.65rem;
   letter-spacing: 0.02em;
   transition: background 0.2s, color 0.2s, border-color 0.2s;
   }
   .team-card:hover .meta-tag {
   background: #e8d9bf;
   border-color: #c9a96e;
   color: #6b4e1a;
   }
   .meta-tag svg {
   flex-shrink: 0;
   opacity: 0.65;
   }
   /* ── Responsive ── */
   @media (max-width: 580px) {
   .team-card-our-teams {
   grid-template-columns: 1fr;
   grid-template-rows: 220px auto;
   }
   .member-photo-wrap::after {
   top: auto; bottom: 0;
   width: 100%; height: 4px;
   background: linear-gradient(to right, var(--accent), var(--accent-lt));
   }
   .member-content {
   padding: 1.4rem 1.5rem 1.6rem;
   }
   .team-list { gap: 1.25rem; }
   }
   @media (max-width: 380px) {
   .member-content { padding: 1.2rem 1.2rem 1.4rem; }
   .member-name { font-size: 1.35rem; }
   }
   /* ── Stagger animation on load ── */
   @keyframes fadeUp {
   from { opacity: 0; transform: translateY(24px); }
   to   { opacity: 1; transform: translateY(0); }
   }
   .team-header  { animation: fadeUp 0.6s ease both; }
   .team-card-our-teams:nth-child(1) { animation: fadeUp 0.6s 0.12s ease both; }
   .team-card-our-teams:nth-child(2) { animation: fadeUp 0.6s 0.22s ease both; }
   .team-card-our-teams:nth-child(3) { animation: fadeUp 0.6s 0.32s ease both; }
   .team-card-our-teams:nth-child(4) { animation: fadeUp 0.6s 0.42s ease both; }
   /* Two-column list layout */
   .member-lists-container {
   display: flex;
   gap: 2rem;
   justify-content: space-between;
   }
   .member-list-section {
   flex: 1;
   }
   .member-list-section p {
   font-weight: 500 !important;
   margin-bottom: 0.5rem;
   margin-top: 0.5rem;
   }
   .page-title-content p {
   font-size: 22px;
   color: #fff;
   }
   .page-title-content h1 {
   margin-bottom: 0px !important;
   }
   .member-list-section ul {
   margin: 0;
   padding-left: 1.5rem;
   }
   @media (max-width: 768px) {
   .member-lists-container {
   flex-direction: column;
   gap: 1rem;
   }
   }
</style>
<div class="page-title-area ptb2-100">
   <div class="container">
      <div class="page-title-content">
         <h1>Rencontrez l’équipe</h1>
         <p>Des spécialistes locaux et des planificateurs de voyages dédiés à créer des expériences inoubliables en Inde</p>
         <ul>
            <li class="item"><a href="{{route('index') }}">Accueil</a></li>
            <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Teams</a></li>
         </ul>
      </div>
   </div>
   <div class="bg-image">
      <img src="https://www.poonamvoyageinde.com/uploads/banners/Blog.jpg" alt="Demo Image">
   </div>
</div>
<section id="ourTeamsNew" class="">
   <div class="width-100 bg-color-teams">
   <div class="container">
   <!-- <div class="row">
      <div class="col-12">
         <div class="section-header text-center mb-5">
            <span class="eyebrow">Rencontrez l'équipe</span>
            <h2>Notre équipe d'experts du voyage</h2>
            <p>Des spécialistes locaux et des planificateurs de voyage dédiés à créer des expériences inoubliables en Inde.</p>
         </div>
      </div>
   </div> -->
   <div class="row">
      <div class="col-12">
         <ul class="team-list">
            <!-- Member 1 -->
            <li>
               <article class="team-card-our-teams">
                  <div class="member-photo-wrap">
                     <img
                        src="https://www.poonamvoyageinde.com/uploads/abouts/WhatsApp Image 2025-06-21 at 13.36.58 (1).jpeg"
                        alt="Portrait of James Harrington"
                        loading="eager"
                        />
                  </div>
                  <div class="member-content">
                     <h3 class="member-name">Khushal Singh</h3>
                     <p class="member-role">PDG (Président-directeur général)</p>
                     <p class="member-bio">
                        est un professionnel du tourisme depuis 2013. Originaire près de Jodhpur, il a débuté dans le transport à New Delhi, où il a développé une bonne compréhension des voyageurs internationaux
                     </p>
                     <p>Après une expérience à Pondichéry, il est devenu guide touristique spécialisé dans le Rajasthan et le nord de l’Inde.</p>
                     <p>Il dispose aussi d’une expérience internationale (croisières Costa et Europe) et s’engage à offrir un service professionnel, authentique et de qualité.</p>
                     <div class="member-meta">
                        <span class="meta-tag">
                           <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M5.5 0C3.015 0 1 2.015 1 4.5c0 3.375 4.5 8.5 4.5 8.5S10 7.875 10 4.5C10 2.015 7.985 0 5.5 0Zm0 6.125A1.625 1.625 0 1 1 5.5 2.875a1.625 1.625 0 0 1 0 3.25Z" fill="currentColor"/>
                           </svg>
                           Rajasthan and northern India.
                        </span>
                        <span class="meta-tag">
                           <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1h5v4H1zM7 1h5v4H7zM2 7h9M6.5 5v4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                           English, Hindi, French
                        </span>
                     </div>
                     <!-- <nav class="member-links" aria-label="James Harrington's profiles">
                        <a href="#" aria-label="LinkedIn">in</a>
                        <a href="#" aria-label="Twitter / X">𝕏</a>
                        </nav> -->
                  </div>
               </article>
            </li>
            <!-- Member 2 -->
            <li>
               <article class="team-card-our-teams">
                  <div class="member-photo-wrap">
                     <img
                        src="https://www.poonamvoyageinde.com/uploads/teams/ourteam.png"
                        alt="Portrait of Sophia Chen"
                        loading="lazy"
                        />
                  </div>
                  <div class="member-content">
                     <h3 class="member-name">Dilip Singh Rathore</h3>
                     <p class="member-role">Directeur de Bureau – Poonam Voyage Inde</p>
                     <p class="member-bio">
                        est un professionnel du tourisme et de l’hôtellerie avec plus de 20 ans d’expérience. Originaire de Jodhpur, il a travaillé dans des établissements prestigieux comme Umaid Bhawan Palace (groupe Taj Hotels) et ITC Welcome.
                     </p>
                     <p>Aujourd’hui, chez Poonam Voyage Inde, il gère les opérations de voyages pour une clientèle internationale, en assurant un service professionnel et de qualité.</p>
                     <div class="member-meta">
                        <span class="meta-tag">
                           <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M5.5 0C3.015 0 1 2.015 1 4.5c0 3.375 4.5 8.5 4.5 8.5S10 7.875 10 4.5C10 2.015 7.985 0 5.5 0Zm0 6.125A1.625 1.625 0 1 1 5.5 2.875a1.625 1.625 0 0 1 0 3.25Z" fill="currentColor"/>
                           </svg>
                           Jodhpur, Rajasthan, Inde
                        </span>
                        <span class="meta-tag">
                           <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1h5v4H1zM7 1h5v4H7zM2 7h9M6.5 5v4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                           English, Hindi, French
                        </span>
                     </div>
                  </div>
               </article>
            </li>
            <!-- Member 3 -->
            <li>
               <article class="team-card-our-teams">
                  <div class="member-photo-wrap">
                     <img
                        src="https://www.poonamvoyageinde.com/uploads/teams/ourteam.png"
                        alt="Portrait of Marcus Ellington"
                        loading="lazy"
                        />
                  </div>
                  <div class="member-content">
                     <h3 class="member-name">Rajendre Singh Rajpurohit</h3>
                     <p class="member-role">Assistant Responsable Voyages</p>
                     <p class="member-bio">
                        Compétences principales : Support client, gestion des itinéraires, logistique locale en Inde du Sud (Chennai) — Langues : Anglais / Tamoul
                        </p>

                        <p>
                        Rajendre travaille pour Poonam Voyage Inde et est spécialisé dans les circuits du Sud de l’Inde (Tamil Nadu, Kerala et Karnataka). Installé dans la région depuis plus de 6 ans, il assure une coordination efficace des voyages sur place.
                        </p>

                        <ul>
                        <li>Organisation et coordination des déplacements des voyageurs</li>
                        <li>Accueil et assistance à l’aéroport</li>
                        <li>Gestion des transports locaux avec chauffeur</li>
                        <li>Communication locale grâce à sa maîtrise du tamoul</li>
                        <li>Support pour les circuits personnalisés en Inde</li>
                        </ul>

                        <p>
                        Son expérience locale garantit des voyages authentiques et bien organisés dans le Sud de l’Inde.
                        </p>
                     <div class="member-meta">
                        <span class="meta-tag">
                           <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M5.5 0C3.015 0 1 2.015 1 4.5c0 3.375 4.5 8.5 4.5 8.5S10 7.875 10 4.5C10 2.015 7.985 0 5.5 0Zm0 6.125A1.625 1.625 0 1 1 5.5 2.875a1.625 1.625 0 0 1 0 3.25Z" fill="currentColor"/>
                           </svg>
                           South India (Chennai)
                        </span>
                        <span class="meta-tag">
                           <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1h5v4H1zM7 1h5v4H7zM2 7h9M6.5 5v4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                           English, Tamil
                        </span>
                     </div>
                  </div>
               </article>
            </li>
            <!-- Member 4 -->
            <li>
               <article class="team-card-our-teams">
                  <div class="member-photo-wrap">
                     <img
                        src="https://www.poonamvoyageinde.com/uploads/teams/ourteam.png"
                        alt="Portrait of Aisha Patel"
                        loading="lazy"
                        />
                  </div>
                  <div class="member-content">
                     <h3 class="member-name">Arvind & Vinod </h3>
                     <p class="member-role">Chauffeurs en Inde du Nord (anglophones)</p>
                     <p class="member-bio">
                        Arvind et Vinod sont chauffeurs depuis 2017, offrant un service de transport fiable dans le nord de l’Inde. Ils communiquent en anglais et hindi (non francophones) et assurent uniquement le rôle de chauffeur.
                     </p>
                     <p>Leurs points forts :</p>
                     <ul>
                        <li>Accueil ponctuel à l’aéroport</li>
                        <li>Service quotidien fiable et professionnel</li>
                        <li>Écoute attentive des besoins des clients</li>
                        <li>Sérieux, honnêteté et sens du service</li>
                     </ul>
                     <p>Avec eux, vous bénéficiez d’un transport sécurisé et de qualité en toute confiance</p>
                     <div class="member-meta">
                        <span class="meta-tag">
                           <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M5.5 0C3.015 0 1 2.015 1 4.5c0 3.375 4.5 8.5 4.5 8.5S10 7.875 10 4.5C10 2.015 7.985 0 5.5 0Zm0 6.125A1.625 1.625 0 1 1 5.5 2.875a1.625 1.625 0 0 1 0 3.25Z" fill="currentColor"/>
                           </svg>
                           Northern India
                        </span>
                        <span class="meta-tag">
                           <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1h5v4H1zM7 1h5v4H7zM2 7h9M6.5 5v4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                           English, Hindi
                        </span>
                     </div>
                  </div>
               </article>
            </li>
            <!-- Member 5 -->
            <li>
               <article class="team-card-our-teams">
                  <div class="member-photo-wrap">
                     <img
                        src="https://www.poonamvoyageinde.com/uploads/abouts/WhatsApp Image 2025-06-21 at 13.36.58 (1).jpeg"
                        alt="Portrait of Khusipal Singh"
                        loading="lazy"
                        />
                  </div>
                  <div class="member-content">
                     <h3 class="member-name">Khusipal Singh </h3>
                     <p class="member-role">Fondateur et PDG de Poonam Voyage Inde</p>
                     <p class="member-bio">
                        Khusipal Singh est guide francophone et PDG de Poonam Voyage Inde, actif depuis plus de 10 ans. Il a débuté sa carrière à New Delhi et est recommandé depuis 2015 sur les forums francophones.
                     </p>
                     <div class="member-lists-container">
                        <div class="member-list-section">
                           <p>Zones couvertes :</p>
                           <ul>
                              <li>Inde du Nord : Punjab, Rajasthan, Gujarat, Varanasi</li>
                              <li>Inde du Centre et du Sud</li>
                              <li>Inde de l'Est : Darjeeling, Sikkim</li>
                           </ul>
                        </div>
                        <div class="member-list-section">
                           <p>Expertise :</p>
                           <ul>
                              <li>Circuits sur mesure haut de gamme</li>
                              <li>Organisation de voyages personnalisés (y compris croisières)</li>
                              <li>Accompagnement authentique et immersif</li>
                           </ul>
                        </div>
                     </div>
                     <div class="member-meta">
                        <span class="meta-tag">
                           <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M5.5 0C3.015 0 1 2.015 1 4.5c0 3.375 4.5 8.5 4.5 8.5S10 7.875 10 4.5C10 2.015 7.985 0 5.5 0Zm0 6.125A1.625 1.625 0 1 1 5.5 2.875a1.625 1.625 0 0 1 0 3.25Z" fill="currentColor"/>
                           </svg>
                           India
                        </span>
                        <span class="meta-tag">
                           <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1h5v4H1zM7 1h5v4H7zM2 7h9M6.5 5v4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                           English, French
                        </span>
                     </div>
                  </div>
               </article>
            </li>
         </ul>
      </div>
   </div>
   </div>
   </div>
   <div class="other-guides">
   <div class="container">
      <div class="row">
         <h2>Poonam Voyage Inde</h2>
         <p>  Nos autres guides francophones expérimentés
            Tous nos guides travaillent avec Poonam Voyage Inde depuis plus de 5 ans et possèdent entre 10 et 30 ans d’expérience dans le tourisme francophone en Inde : </br>
            <strong>M. Ratan</strong> – plus de 30 ans d’expérience</br>
            <strong>M. Bharat</strong> – plus de 10 ans d’expérience</br>
            <strong>M. Krishkant</strong> – plus de 10 ans d’expérience</br>
            <strong>M. Ajay Sharma</strong> – plus de 10 ans d’expérience</br>
            Chacun d’eux offre une expérience immersive et authentique, combinant découvertes culturelles, richesses historiques et confort optimal pour les voyageurs.
         </p>
      </div>
   </div>
</section>
@endsection