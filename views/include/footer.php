<div class="footer-2023">
  <!-- Botones principales con iconos -->
  <div class="footer-buttons">
    <a href="<?php echo BASE_URL; ?>contacto" class="f-btn pulse">
      <i class="fas fa-paper-plane"></i> Contáctanos
    </a>
    <a href="<?php echo BASE_URL; ?>perfil" class="f-btn pulse">
      <i class="fas fa-user-astronaut"></i> Mi Perfil
    </a>
    <a href="<?php echo BASE_URL; ?>sobre-nosotros" class="f-btn pulse">
      <i class="fas fa-rocket"></i> Nosotros
    </a>
  </div>

  <!-- Info contacto con iconos animados -->
  <div class="footer-contact">
    <div class="contact-item zoom">
      <i class="fas fa-map-marker-alt"></i>
      <span>AV. SAN MARTIN N° 269</span>
    </div>
    <div class="contact-item zoom">
      <i class="fas fa-phone-alt"></i>
      <span>945147529</span>
    </div>
    <div class="contact-item zoom">
      <i class="fas fa-clock"></i>
      <span>24/7 Abierto</span>
    </div>
  </div>

  <!-- Redes sociales con hover effects -->
  <div class="social-bar">
    <a href="https://www.facebook.com/profile.php?id=61559388622821&locale=es_LA" class="social-icon fb">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://wa.me/51945147529" class="social-icon wa">
      <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://www.instagram.com/pamelanelsy/" class="social-icon ig">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="https://www.tiktok.com/" class="social-icon tt">
      <i class="fab fa-tiktok"></i>
    </a>
    <a href="https://discord.com/" class="social-icon dc">
      <i class="fab fa-discord"></i>
    </a>
  </div>

  <!-- Efecto ola decorativo -->
  <div class="footer-wave">
    <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="#00ffff"></path>
      <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="#00ffff"></path>
      <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="#00ffff"></path>
    </svg>
  </div>
</div>

<!-- Font Awesome para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
:root {
  --neon-cyan: #00ffff;
  --neon-pink: #ff00ff;
  --dark-space: #0f0f1a;
  --electric-purple: #9d00ff;
}

.footer-2023 {
  background: linear-gradient(135deg, #0f0f1a 0%, #1a1a2e 100%);
  color: white;
  padding: 2rem 1rem 0;
  position: relative;
  overflow: hidden;
  font-family: 'Poppins', sans-serif;
}

.footer-buttons {
  display: flex;
  justify-content: center;
  gap: 1.5rem;
  flex-wrap: wrap;
  margin-bottom: 2rem;
}

.f-btn {
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(10px);
  border: 1px solid var(--neon-cyan);
  color: white;
  padding: 0.8rem 1.8rem;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 0.8rem;
  transition: all 0.3s ease;
  box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
}

.f-btn:hover {
  background: var(--electric-purple);
  transform: translateY(-5px);
  box-shadow: 0 5px 20px rgba(157, 0, 255, 0.5);
  border-color: var(--neon-pink);
}

.f-btn i {
  font-size: 1.2rem;
}

.footer-contact {
  display: flex;
  justify-content: center;
  gap: 3rem;
  margin: 2rem auto;
  flex-wrap: wrap;
}

.contact-item {
  display: flex;
  align-items: center;
  gap: 0.8rem;
  font-size: 1.1rem;
}

.contact-item i {
  color: var(--neon-cyan);
  font-size: 1.3rem;
}

.social-bar {
  display: flex;
  justify-content: center;
  gap: 1.5rem;
  margin: 2rem 0;
}

.social-icon {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  color: white;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.social-icon:after {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(45deg, var(--neon-cyan), var(--neon-pink));
  opacity: 0;
  transition: all 0.3s ease;
  z-index: -1;
}

.social-icon:hover {
  transform: translateY(-5px) scale(1.1);
  color: white;
}

.social-icon:hover:after {
  opacity: 1;
}

.fb { background: #3b5998; }
.wa { background: #25D366; }
.ig { background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); }
.tt { background: #000000; }
.dc { background: #5865F2; }

.footer-wave {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100px;
}

/* Animaciones */
.pulse:hover {
  animation: pulse 1s infinite;
}

.zoom:hover {
  transform: scale(1.1);
}

@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.05); }
  100% { transform: scale(1); }
}

@media (max-width: 768px) {
  .footer-buttons {
    flex-direction: column;
    align-items: center;
  }
  
  .footer-contact {
    flex-direction: column;
    align-items: center;
    gap: 1rem;
  }
}
</style>