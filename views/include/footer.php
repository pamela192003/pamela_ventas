.footer {
  background: linear-gradient(135deg, #6e8efb, #a777e3);
  padding: 30px 0;
  border-radius: 20px 20px 0 0;
  box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
  position: relative;
  overflow: hidden;
}

.footer::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 5px;
  background: linear-gradient(90deg, #ff8a00, #e52e71, #b36cff);
}

.btn-info {
  background-color: transparent;
  border: 2px solid white;
  color: white;
  border-radius: 50px;
  padding: 10px 25px;
  margin: 0 10px;
  font-weight: bold;
  transition: all 0.3s ease;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.btn-info:hover {
  background-color: white;
  color: #6e8efb;
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.text-center {
  margin-top: 20px;
  position: relative;
}

#textContent, #text-right {
  color: white;
  font-weight: bold;
  text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
  position: relative;
  display: inline-block;
  padding: 5px 15px;
  background-color: rgba(255,255,255,0.1);
  border-radius: 20px;
  margin: 10px;
}

.bi-facebook, .bi-whatsapp, .bi-instagram {
  color: white;
  transition: all 0.3s ease;
  filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.2));
  margin: 0 5px;
}

.bi-facebook:hover {
  color: #3b5998;
  transform: scale(1.1);
}

.bi-whatsapp:hover {
  color: #25D366;
  transform: scale(1.1);
}

.bi-instagram:hover {
  color: #E1306C;
  transform: scale(1.1);
}

/* Efecto de burbujas flotantes */
.footer::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 50px;
  background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.1)" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
  background-size: cover;
}