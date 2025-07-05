<?php
/**
 * ROI Labs Theme - AI-Focused Professional Header
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
    <title>ROI Labs - Especialistas em Inteligência Artificial e Automação</title>
    <meta name="description" content="Transformamos seu negócio com Inteligência Artificial. Chatbots, automação de processos, análise de dados e soluções de IA personalizadas que geram ROI real.">
    <meta name="keywords" content="inteligência artificial, IA, chatbots, automação, machine learning, AI consulting, análise de dados, ROI">
    
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
            color: #6366f1;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .logo:hover {
            color: #4f46e5;
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
            color: #6366f1;
            background: rgba(99, 102, 241, 0.1);
        }
        
        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: #6366f1;
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
        
        /* Hero Section - AI Focused */
        .hero {
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
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
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='7' cy='7' r='7'/%3E%3Ccircle cx='53' cy='7' r='7'/%3E%3Ccircle cx='53' cy='53' r='7'/%3E%3Ccircle cx='7' cy='53' r='7'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero h1 {
            font-size: 3.2rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            animation: fadeInUp 1s ease-out;
        }
        
        .hero p {
            font-size: 1.4rem;
            opacity: 0.95;
            max-width: 700px;
            margin: 0 auto 2.5rem;
            animation: fadeInUp 1s ease-out 0.2s both;
        }
        
        .hero-actions {
            animation: fadeInUp 1s ease-out 0.4s both;
        }
        
        .btn {
            display: inline-block;
            padding: 0.9rem 2.2rem;
            margin: 0 0.7rem 1rem;
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
            color: #6366f1;
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
            color: #6366f1;
            transform: translateY(-3px);
        }
        
        /* AI Capabilities Section */
        .ai-capabilities {
            padding: 5rem 0;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }
        
        .section-title {
            text-align: center;
            font-size: 2.8rem;
            margin-bottom: 4rem;
            color: #1e293b;
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
            background: #6366f1;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .capabilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
            margin: 3rem 0;
        }
        
        .capability-item {
            text-align: center;
            padding: 3rem 2rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border: 1px solid rgba(99, 102, 241, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .capability-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #6366f1, #8b5cf6);
        }
        
        .capability-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(99, 102, 241, 0.15);
            border-color: #6366f1;
        }
        
        .capability-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));
        }
        
        .capability-item h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #1e293b;
            font-weight: 600;
        }
        
        .capability-item p {
            color: #64748b;
            line-height: 1.7;
            font-size: 1rem;
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
            color: #1e293b;
            font-weight: 600;
        }
        
        .contact-item a {
            color: #6366f1;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
        }
        
        .contact-item a:hover {
            color: #4f46e5;
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
                font-size: 2.4rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
            
            .ai-capabilities {
                padding: 3rem 0;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .capabilities-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .capability-item {
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
                    🤖 ROI Labs
                </a>
            </div>
            
            <ul class="nav-menu" id="nav-menu">
                <li><a href="#hero">Início</a></li>
                <li><a href="#ia-solutions">Soluções IA</a></li>
                <li><a href="#casos-uso">Casos de Uso</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
            
            <button class="menu-toggle" id="menu-toggle" aria-label="Toggle Menu">
                <span class="hamburger"></span>
            </button>
        </nav>
    </div>
</header>

<div id="page" class="site">
    
    <!-- Hero Section - AI Focused -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Inteligência Artificial que Transforma Negócios</h1>
                <p>Especializamos em implementar soluções de IA que automatizam processos, analisam dados inteligentemente e geram ROI mensurável. Do chatbot ao machine learning avançado.</p>
                <div class="hero-actions">
                    <a href="#ia-solutions" class="btn btn-primary">Soluções de IA</a>
                    <a href="#contato" class="btn btn-outline">Fale com Especialista</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- AI Capabilities Section -->
    <section class="ai-capabilities" id="ia-solutions">
        <div class="container">
            <h2 class="section-title">Nossas Especialidades em IA</h2>
            
            <div class="capabilities-grid">
                <div class="capability-item">
                    <div class="capability-icon">💬</div>
                    <h3>Chatbots Inteligentes</h3>
                    <p>Assistentes virtuais com processamento de linguagem natural que atendem 24/7, qualificam leads e reduzem custos operacionais em até 70%.</p>
                </div>
                
                <div class="capability-item">
                    <div class="capability-icon">⚙️</div>
                    <h3>Automação de Processos</h3>
                    <p>RPA (Robotic Process Automation) e workflows inteligentes que eliminam tarefas repetitivas e aumentam produtividade em 300%.</p>
                </div>
                
                <div class="capability-item">
                    <div class="capability-icon">📊</div>
                    <h3>Análise Preditiva</h3>
                    <p>Machine Learning para prever tendências, comportamentos e demandas, permitindo tomada de decisões estratégicas baseadas em dados.</p>
                </div>
                
                <div class="capability-item">
                    <div class="capability-icon">🎯</div>
                    <h3>Personalização IA</h3>
                    <p>Sistemas de recomendação e personalização que aumentam conversão, engagement e lifetime value dos clientes.</p>
                </div>
                
                <div class="capability-item">
                    <div class="capability-icon">🔍</div>
                    <h3>Computer Vision</h3>
                    <p>Reconhecimento de imagens, OCR avançado e análise visual automatizada para controle de qualidade e otimização de processos.</p>
                </div>
                
                <div class="capability-item">
                    <div class="capability-icon">📈</div>
                    <h3>BI com IA</h3>
                    <p>Dashboards inteligentes que identificam padrões ocultos, anomalias e oportunidades automaticamente, gerando insights acionáveis.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section - AI Focused -->
    <section class="section" id="sobre">
        <div class="container">
            <h2 class="section-title">Por que Escolher a ROI Labs para IA?</h2>
            
            <div style="max-width: 900px; margin: 0 auto; text-align: center;">
                <p style="font-size: 1.4rem; color: #6366f1; margin-bottom: 3rem; font-weight: 600;">
                    Somos especialistas em Inteligência Artificial aplicada a negócios. Cada projeto é desenvolvido para gerar ROI mensurável e impacto real nos resultados.
                </p>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem;">
                    <div style="background: white; padding: 2.5rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                        <h3 style="color: #6366f1; margin-bottom: 1rem;">🚀 ROI Comprovado</h3>
                        <p style="line-height: 1.7;">Nossos clientes veem ROI médio de 300-500% no primeiro ano com nossas soluções de IA.</p>
                    </div>
                    
                    <div style="background: white; padding: 2.5rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                        <h3 style="color: #6366f1; margin-bottom: 1rem;">🎯 Implementação Rápida</h3>
                        <p style="line-height: 1.7;">Metodologia ágil que entrega resultados em 30-90 dias, não em anos como consultorias tradicionais.</p>
                    </div>
                    
                    <div style="background: white; padding: 2.5rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                        <h3 style="color: #6366f1; margin-bottom: 1rem;">🛡️ Suporte Especializado</h3>
                        <p style="line-height: 1.7;">Equipe dedicada de cientistas de dados e engenheiros de IA para garantir o sucesso contínuo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="section" id="contato">
        <div class="container">
            <h2 class="section-title">Vamos Implementar IA no Seu Negócio?</h2>
            
            <div class="contact-info">
                <div class="contact-item">
                    <h4>💼 Consultoria Estratégica em IA</h4>
                    <p><a href="mailto:ia@roilabs.com.br">ia@roilabs.com.br</a></p>
                </div>
                
                <div class="contact-item">
                    <h4>📞 Fale com um Especialista</h4>
                    <p><a href="https://calendly.com/roilabs-ia" target="_blank">Agendar Reunião Gratuita</a></p>
                </div>
                
                <div class="contact-item">
                    <h4>🌐 Portfólio de Projetos IA</h4>
                    <p><a href="https://roilabs.com.br" target="_blank">www.roilabs.com.br</a></p>
                </div>
            </div>
        </div>
    </section>

<div id="content" class="site-content" style="display: none;">
