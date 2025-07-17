<div class="footer-2024">
  <!-- Botones principales con iconos modernos -->
  <div class="footer-actions">
    <a href="<?php echo BASE_URL; ?>contacto" class="action-btn">
      <i class="fas fa-comment-dots"></i>
      <span>Chat</span>
    </a>
    <a href="<?php echo BASE_URL; ?>perfil" class="action-btn">
      <i class="fas fa-user-ninja"></i>
      <span>Perfil</span>
    </a>
    <a href="<?php echo BASE_URL; ?>sobre-nosotros" class="action-btn">
      <i class="fas fa-robot"></i>
      <span>Team</span>
    </a>
    <a href="<?php echo BASE_URL; ?>faq" class="action-btn">
      <i class="fas fa-question-circle"></i>
      <span>FAQ</span>
    </a>
  </div>

  <!-- Info contacto con estilo gamer -->
  <div class="footer-info">
    <div class="info-card glow">
      <i class="fas fa-map-marked-alt"></i>
      <p>JR. OSWALDO N. REGAL 278<br><span>HUANTA</span></p>
    </div>
    <div class="info-card glow">
      <i class="fas fa-phone-volume"></i>
      <p>990 888 987<br><span>24/7</span></p>
    </div>
    <div class="info-card glow">
      <i class="fas fa-envelope-open-text"></i>
      <p>contacto@empresa.com<br><span>Respuesta rápida</span></p>
    </div>
  </div>

  <!-- Redes sociales con efecto neón -->
  <div class="social-links">
    <a href="https://www.facebook.com/profile.php?id=61559388622821&locale=es_LA" class="social-btn fb">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://wa.me/51 990 888 987" class="social-btn wa">
      <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://www.instagram.com/" class="social-btn ig">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="https://tiktok.com" class="social-btn tk">
      <i class="fab fa-tiktok"></i>
    </a>
    <a href="https://youtube.com" class="social-btn yt">
      <i class="fab fa-youtube"></i>
    </a>
    <a href="https://discord.com" class="social-btn dc">
      <i class="fab fa-discord"></i>
    </a>
  </div>

  <!-- Efecto de partículas decorativas -->
  <div class="particles">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
  </div>

  <!-- Copyright con estilo moderno -->
  <div class="footer-copy">
    <p>© 2024 NombreEmpresa | <span>Made with <i class="fas fa-heart"></i> for digital creators</span></p>
  </div>
</div>

<!-- Font Awesome para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
:root {
  --electric-blue: #00f2ff;
  --neon-pink: #ff00ea;
  --cyber-purple: #8a2be2;
  --dark-matrix: #0a0a12;
  --light-matrix: #00ff88;
}

.footer-2024 {
  background: var(--dark-matrix);
  color: white;
  padding: 2rem 1rem;
  position: relative;
  overflow: hidden;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  border-top: 1px solid rgba(0, 242, 255, 0.2);
}

.footer-actions {
  display: flex;
  justify-content: center;
  gap: 1rem;
  flex-wrap: wrap;
  margin-bottom: 2.5rem;
}

.action-btn {
  background: rgba(138, 43, 226, 0.1);
  border: 1px solid var(--cyber-purple);
  color: white;
  padding: 0.8rem 1.2rem;
  border-radius: 12px;
  text-decoration: none;
  font-weight: 600;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
  transition: all 0.3s ease;
  width: 80px;
  text-align: center;
  backdrop-filter: blur(5px);
}

.action-btn i {
  font-size: 1.5rem;
  color: var(--electric-blue);
  transition: all 0.3s ease;
}

.action-btn span {
  font-size: 0.9rem;
}

.action-btn:hover {
  background: rgba(0, 242, 255, 0.2);
  transform: translateY(-5px);
  box-shadow: 0 5px 15px rgba(0, 242, 255, 0.3);
  border-color: var(--electric-blue);
}

.action-btn:hover i {
  color: var(--neon-pink);
  transform: scale(1.2);
}

.footer-info {
  display: flex;
  justify-content: center;
  gap: 1.5rem;
  margin: 2rem auto;
  flex-wrap: wrap;
}

.info-card {
  background: rgba(10, 10, 18, 0.7);
  border-radius: 16px;
  padding: 1.2rem;
  width: 200px;
  text-align: center;
  border: 1px solid rgba(0, 242, 255, 0.1);
  transition: all 0.3s ease;
}

.info-card i {
  font-size: 2rem;
  color: var(--electric-blue);
  margin-bottom: 0.8rem;
  display: block;
}

.info-card p {
  margin: 0;
  line-height: 1.5;
}

.info-card span {
  color: var(--neon-pink);
  font-size: 0.9rem;
  font-weight: 600;
}

.glow:hover {
  border-color: var(--electric-blue);
  box-shadow: 0 0 15px rgba(0, 242, 255, 0.4);
  transform: translateY(-3px);
}

.social-links {
  display: flex;
  justify-content: center;
  gap: 1rem;
  margin: 2rem 0;
  flex-wrap: wrap;
}

.social-btn {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.3rem;
  color: white;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  border: 2px solid transparent;
}

.social-btn:before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
  transition: 0.5s;
}

.social-btn:hover:before {
  left: 100%;
}

.social-btn:hover {
  transform: translateY(-5px) rotate(10deg);
  border-color: white;
}

.fb { background: #1877F2; }
.wa { background: #25D366; }
.ig { background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); }
.tk { background: #000000; }
.yt { background: #FF0000; }
.dc { background: #5865F2; }

.footer-copy {
  text-align: center;
  margin-top: 2rem;
  padding-top: 1.5rem;
  border-top: 1px solid rgba(0, 242, 255, 0.1);
  font-size: 0.9rem;
  color: rgba(255,255,255,0.7);
}

.footer-copy span {
  color: var(--neon-pink);
}

.footer-copy i {
  color: #ff0000;
  margin: 0 3px;
}

/* Efecto de partículas */
.particles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 0;
}

.particle {
  position: absolute;
  background: rgba(0, 242, 255, 0.6);
  border-radius: 50%;
  animation: float 15s infinite linear;
}

.particle:nth-child(1) {
  width: 5px;
  height: 5px;
  top: 20%;
  left: 10%;
  animation-delay: 0s;
}

.particle:nth-child(2) {
  width: 3px;
  height: 3px;
  top: 60%;
  left: 25%;
  animation-delay: 2s;
}

.particle:nth-child(3) {
  width: 4px;
  height: 4px;
  top: 40%;
  left: 70%;
  animation-delay: 4s;
}

.particle:nth-child(4) {
  width: 6px;
  height: 6px;
  top: 80%;
  left: 50%;
  animation-delay: 6s;
}

.particle:nth-child(5) {
  width: 2px;
  height: 2px;
  top: 30%;
  left: 90%;
  animation-delay: 8s;
}

@keyframes float {
  0% { transform: translateY(0) rotate(0deg); opacity: 1; }
  100% { transform: translateY(-100vh) rotate(360deg); opacity: 0; }
}

@media (max-width: 768px) {
  .footer-actions {
    gap: 0.5rem;
  }
  
  .action-btn {
    width: 70px;
    padding: 0.6rem 0.5rem;
    font-size: 0.8rem;
  }
  
  .footer-info {
    flex-direction: column;
    align-items: center;
    gap: 1rem;
  }
  
  .info-card {
    width: 90%;
    max-width: 250px;
  }
}
</style>