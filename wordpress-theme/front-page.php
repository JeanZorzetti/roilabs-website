<?php
/**
 * ROI Labs Theme - Front Page Template
 * 
 * @package ROILabs
 * @version 1.0.0
 */

get_header(); ?>

<main id="main" class="site-main homepage" role="main">
    
    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    🚀 ROI Labs - Transformando Ideias em Resultados
                </h1>
                
                <p class="hero-subtitle">
                    Desenvolvemos soluções tecnológicas inovadoras que geram ROI real para o seu negócio.
                </p>
                
                <div class="hero-actions">
                    <a href="#servicos" class="btn btn-primary">
                        Nossos Serviços
                    </a>
                    
                    <a href="#contato" class="btn btn-outline">
                        Entre em Contato
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section class="section" id="servicos">
        <div class="container">
            <h2 class="section-title">
                Nossos Serviços
            </h2>
            
            <div class="services-grid">
                
                <div class="service-item">
                    <div class="service-icon">💻</div>
                    <h3>Desenvolvimento Web</h3>
                    <p>Criamos websites e aplicações web modernas, responsivas e otimizadas.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">📱</div>
                    <h3>Apps Mobile</h3>
                    <p>Desenvolvemos aplicativos para iOS e Android com foco na UX.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">🤖</div>
                    <h3>Inteligência Artificial</h3>
                    <p>Implementamos soluções de IA para otimizar seus processos.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">📊</div>
                    <h3>Analytics & BI</h3>
                    <p>Transformamos dados em insights acionáveis.</p>
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="section" id="contato">
        <div class="container">
            <h2 class="section-title">
                Entre em Contato
            </h2>
            
            <div class="contact-info">
                <div class="contact-item">
                    <h4>📧 Email</h4>
                    <p><a href="mailto:contato@roilabs.com.br">contato@roilabs.com.br</a></p>
                </div>
                
                <div class="contact-item">
                    <h4>🌐 Website</h4>
                    <p><a href="https://roilabs.com.br">www.roilabs.com.br</a></p>
                </div>
            </div>
        </div>
    </section>
    
</main>

<style>
.hero {
    background: linear-gradient(135deg, #007cba, #005a8a);
    color: white;
    padding: 4rem 0;
    text-align: center;
}

.hero-title {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.hero-subtitle {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.hero-actions {
    margin-top: 2rem;
}

.btn {
    display: inline-block;
    padding: 0.75rem 2rem;
    margin: 0 0.5rem;
    font-weight: 500;
    text-align: center;
    border: 2px solid transparent;
    border-radius: 6px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.btn-primary {
    background-color: white;
    color: #007cba;
    border-color: white;
}

.btn-primary:hover {
    background-color: #f8f9fa;
    transform: translateY(-2px);
}

.btn-outline {
    background-color: transparent;
    color: white;
    border-color: white;
}

.btn-outline:hover {
    background-color: white;
    color: #007cba;
}

.section {
    padding: 3rem 0;
}

.section-title {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.service-item {
    text-align: center;
    padding: 2rem;
    background: #f8f9fa;
    border-radius: 8px;
    transition: transform 0.3s ease;
}

.service-item:hover {
    transform: translateY(-5px);
}

.service-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.contact-info {
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
}

.contact-item {
    margin-bottom: 2rem;
}

.contact-item h4 {
    font-size: 1.25rem;
    margin-bottom: 0.5rem;
}

.contact-item a {
    color: #007cba;
    text-decoration: none;
}

.contact-item a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
    }
    
    .btn {
        display: block;
        margin: 0.5rem 0;
    }
}
</style>

<?php get_footer(); ?>