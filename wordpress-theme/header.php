<?php
/**
 * ROI Labs Theme - Professional Header with Navigation
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROI Labs - Transformando Ideias em Resultados</title>
    <meta name="description" content="Desenvolvemos soluções tecnológicas inovadoras que geram ROI real para o seu negócio. Websites, Apps, IA e Consultoria Tech.">
    
    <style>
        /* Reset e Base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Profissional */
        .site-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .main-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }
        
        .site-branding {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: #007cba;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .logo:hover {
            color: #005a8a;
            transform: scale(1.05);
            transition: all 0.3s ease;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
            margin: 0;
        }
        
        .nav-menu a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-menu a:hover {
            color: #007cba;
            background: rgba(0, 124, 186, 0.1);
        }
        
        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: #007cba;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-menu a:hover::after {
            width: 80%;
        }
        
        /* Menu Toggle (Hamburger) */
        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 4px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
        }
        
        .hamburger {
            width: 25px;
            height: 3px;
            background: #333;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .hamburger::before,
        .hamburger::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 3px;
            background: #333;
            transition: all 0.3s ease;
        }
        
        .hamburger::before {
            top: -8px;
        }
        
        .hamburger::after {
            top: 8px;
        }
        
        .menu-toggle.active .hamburger {
            background: transparent;
        }
        
        .menu-toggle.active .hamburger::before {
            transform: rotate(45deg);
            top: 0;
        }
        
        .menu-toggle.active .hamburger::after {
            transform: rotate(-45deg);
            top: 0;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #007cba 0%, #005a8a 100%);
            color: white;
            padding: 8rem 0 4rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.03' fill-rule='evenodd'%3E%3Cpath d='m0 40l40-40h-40v40zm40 0v-40h-40l40 40z'/%3E%3C/g%3E%3C/svg%3E") repeat;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            animation: fadeInUp 1s ease-out;
        }
        
        .hero p {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto 2rem;
            animation: fadeInUp 1s ease-out 0.2s both;
        }
        
        .hero-actions {
            animation: fadeInUp 1s ease-out 0.4s both;
        }
        
        .btn {
            display: inline-block;
            padding: 0.75rem 2rem;
            margin: 0 0.5rem 1rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }
        
        .btn-primary {
            background: white;
            color: #007cba;
            box-shadow: 0 4px 15px rgba(255,255,255,0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255,255,255,0.4);
        }
        
        .btn-outline {
            background: transparent;
            color: white;
            border: 2px solid white;
        }
        
        .btn-outline:hover {
            background: white;
            color: #007cba;
            transform: translateY(-3px);
        }
        
        /* Sections */
        .section {
            padding: 5rem 0;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.8rem;
            margin-bottom: 4rem;
            color: #333;
            font-weight: 700;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            width: 60px;
            height: 4px;
            background: #007cba;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            margin: 3rem 0;
        }
        
        .service-item {
            text-align: center;
            padding: 3rem 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid rgba(0,124,186,0.1);
        }
        
        .service-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            border-color: #007cba;
        }
        
        .service-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));
        }
        
        .service-item h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #333;
            font-weight: 600;
        }
        
        .service-item p {
            color: #666;
            line-height: 1.7;
            font-size: 1rem;
        }
        
        .bg-secondary {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        
        /* Contact */
        .contact-info {
            text-align: center;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .contact-item {
            margin-bottom: 2.5rem;
            padding: 2rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .contact-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }
        
        .contact-item h4 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #333;
            font-weight: 600;
        }
        
        .contact-item a {
            color: #007cba;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
        }
        
        .contact-item a:hover {
            color: #005a8a;
            text-decoration: underline;
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .main-navigation {
                padding: 0.75rem 0;
            }
            
            .nav-menu {
                position: fixed;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                gap: 0;
                box-shadow: 0 10px 30px rgba(0,0,0,0.15);
                opacity: 0;
                visibility: hidden;
                transform: translateY(-20px);
                transition: all 0.3s ease;
            }
            
            .nav-menu.active {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }
            
            .nav-menu a {
                padding: 1rem 2rem;
                border-bottom: 1px solid #f0f0f0;
            }
            
            .menu-toggle {
                display: flex;
            }
            
            .hero {
                padding: 6rem 0 3rem;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .section {
                padding: 3rem 0;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .service-item {
                padding: 2rem 1.5rem;
            }
            
            .btn {
                display: block;
                margin: 0.5rem auto;
                text-align: center;
                max-width: 250px;
            }
        }
    </style>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Header com Navegação -->
<header class="site-header">
    <div class="container">
        <nav class="main-navigation">
            <div class="site-branding">
                <a href="#hero" class="logo">
                    🚀 ROI Labs
                </a>
            </div>
            
            <ul class="nav-menu" id="nav-menu">
                <li><a href="#hero">Início</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
            
            <button class="menu-toggle" id="menu-toggle" aria-label="Toggle Menu">
                <span class="hamburger"></span>
            </button>
        </nav>
    </div>
</header>

<div id="page" class="site">
    
    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Transformando Ideias em Resultados</h1>
                <p>Desenvolvemos soluções tecnológicas inovadoras que geram ROI real para o seu negócio. Da concepção à execução, entregamos projetos que fazem a diferença.</p>
                <div class="hero-actions">
                    <a href="#servicos" class="btn btn-primary">Nossos Serviços</a>
                    <a href="#contato" class="btn btn-outline">Fale Conosco</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section class="section" id="servicos">
        <div class="container">
            <h2 class="section-title">Nossos Serviços</h2>
            
            <div class="services-grid">
                <div class="service-item">
                    <div class="service-icon">💻</div>
                    <h3>Desenvolvimento Web</h3>
                    <p>Criamos websites e aplicações web modernas, responsivas e otimizadas para conversão e performance máxima.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">📱</div>
                    <h3>Apps Mobile</h3>
                    <p>Desenvolvemos aplicativos nativos e híbridos para iOS e Android com foco na experiência do usuário.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">🤖</div>
                    <h3>Inteligência Artificial</h3>
                    <p>Implementamos soluções de IA e automação para otimizar processos e aumentar a eficiência operacional.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">📊</div>
                    <h3>Analytics & BI</h3>
                    <p>Transformamos dados em insights acionáveis através de dashboards inteligentes e relatórios personalizados.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">☁️</div>
                    <h3>Cloud Solutions</h3>
                    <p>Migramos e otimizamos sua infraestrutura para a nuvem, garantindo escalabilidade e segurança.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">💡</div>
                    <h3>Consultoria Tech</h3>
                    <p>Orientamos sua estratégia tecnológica para maximizar o ROI e acelerar a transformação digital.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="section bg-secondary" id="sobre">
        <div class="container">
            <h2 class="section-title">Sobre a ROI Labs</h2>
            
            <div style="max-width: 900px; margin: 0 auto; text-align: center;">
                <p style="font-size: 1.4rem; color: #007cba; margin-bottom: 2rem; font-weight: 600;">
                    Somos uma empresa de tecnologia focada em gerar resultados mensuráveis para nossos clientes através de soluções inovadoras e estratégicas.
                </p>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem;">
                    <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <h3 style="color: #007cba; margin-bottom: 1rem;">🎯 Nossa Missão</h3>
                        <p style="line-height: 1.7;">Transformar ideias em soluções tecnológicas que impulsionam o crescimento dos negócios.</p>
                    </div>
                    
                    <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <h3 style="color: #007cba; margin-bottom: 1rem;">🚀 Nossa Visão</h3>
                        <p style="line-height: 1.7;">Ser referência em inovação tecnológica que gera ROI real e mensurável para nossos clientes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="section" id="contato">
        <div class="container">
            <h2 class="section-title">Entre em Contato</h2>
            
            <div class="contact-info">
                <div class="contact-item">
                    <h4>📧 Email Comercial</h4>
                    <p><a href="mailto:contato@roilabs.com.br">contato@roilabs.com.br</a></p>
                </div>
                
                <div class="contact-item">
                    <h4>🌐 Website & Portfolio</h4>
                    <p><a href="https://roilabs.com.br" target="_blank">www.roilabs.com.br</a></p>
                </div>
                
                <div class="contact-item">
                    <h4>💼 Repositório GitHub</h4>
                    <p><a href="https://github.com/JeanZorzetti/roilabs-website" target="_blank">github.com/JeanZorzetti/roilabs-website</a></p>
                </div>
            </div>
        </div>
    </section>

<div id="content" class="site-content" style="display: none;">