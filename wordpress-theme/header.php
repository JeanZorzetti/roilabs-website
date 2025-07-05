<?php
/**
 * ROI Labs Theme - SDR IA + Secretária IA Focused
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
    <title>ROI Labs - SDR IA e Secretária IA para Automatizar Vendas</title>
    <meta name="description" content="SDR IA que qualifica leads 24/7 e Secretária IA que agenda reuniões automaticamente. Aumente suas vendas com automação inteligente que funciona.">
    <meta name="keywords" content="SDR IA, secretária IA, automação vendas, chatbot vendas, agendamento automático, prospecção IA">
    
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
            color: #059669;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .logo:hover {
            color: #047857;
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
            color: #059669;
            background: rgba(5, 150, 105, 0.1);
        }
        
        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: #059669;
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
        
        /* Hero Section - SDR IA + Secretária IA */
        .hero {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
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
            background: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'%3E%3Cpath d='m0 40l40-40h-40v40zm40 0v-40h-40l40 40z'/%3E%3C/g%3E%3C/svg%3E") repeat;
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
            color: #059669;
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
            color: #059669;
            transform: translateY(-3px);
        }
        
        /* Products Section - Apenas 2 produtos */
        .products-section {
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
            background: #059669;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 3rem;
            margin: 3rem 0;
        }
        
        .product-item {
            padding: 3.5rem 3rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid rgba(5, 150, 105, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .product-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #059669, #10b981);
        }
        
        .product-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(5, 150, 105, 0.2);
            border-color: #059669;
        }
        
        .product-icon {
            font-size: 4rem;
            margin-bottom: 2rem;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));
        }
        
        .product-item h3 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #1e293b;
            font-weight: 700;
        }
        
        .product-item p {
            color: #64748b;
            line-height: 1.8;
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }
        
        .product-features {
            list-style: none;
            margin-bottom: 2rem;
        }
        
        .product-features li {
            color: #374151;
            margin-bottom: 0.8rem;
            position: relative;
            padding-left: 1.5rem;
        }
        
        .product-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #059669;
            font-weight: bold;
        }
        
        .product-cta {
            background: #059669;
            color: white;
            padding: 1rem 2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .product-cta:hover {
            background: #047857;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(5, 150, 105, 0.3);
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
            color: #059669;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
        }
        
        .contact-item a:hover {
            color: #047857;
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
            
            .products-section {
                padding: 3rem 0;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .products-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .product-item {
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
                <li><a href="#produtos">Nossos Produtos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
            
            <button class="menu-toggle" id="menu-toggle" aria-label="Toggle Menu">
                <span class="hamburger"></span>
            </button>
        </nav>
    </div>
</header>

<div id="page" class="site">
    
    <!-- Hero Section - SDR IA + Secretária IA -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero-content">
                <h1>SDR IA + Secretária IA que Vendem Enquanto Você Dorme</h1>
                <p>Nossa SDR IA qualifica leads 24/7 e nossa Secretária IA agenda reuniões automaticamente. Aumente suas vendas em 300% com automação que realmente funciona.</p>
                <div class="hero-actions">
                    <a href="#produtos" class="btn btn-primary">Ver Produtos</a>
                    <a href="#contato" class="btn btn-outline">Falar com Especialista</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Products Section - Apenas SDR IA + Secretária IA -->
    <section class="products-section" id="produtos">
        <div class="container">
            <h2 class="section-title">Nossos 2 Produtos de Automação</h2>
            
            <div class="products-grid">
                
                <!-- SDR IA -->
                <div class="product-item">
                    <div class="product-icon">🎯</div>
                    <h3>SDR IA</h3>
                    <p>Assistente de vendas com Inteligência Artificial que conversa com seus leads, qualifica oportunidades e passa apenas prospects qualificados para sua equipe.</p>
                    
                    <ul class="product-features">
                        <li>Qualifica leads 24 horas por dia, 7 dias por semana</li>
                        <li>Conversa natural via WhatsApp, site ou email</li>
                        <li>Identifica orçamento, necessidade e timing</li>
                        <li>Integra com seu CRM automaticamente</li>
                        <li>Relatórios detalhados de performance</li>
                    </ul>
                    
                    <a href="#contato" class="product-cta">Quero a SDR IA</a>
                </div>
                
                <!-- Secretária IA -->
                <div class="product-item">
                    <div class="product-icon">📅</div>
                    <h3>Secretária IA</h3>
                    <p>Assistente virtual que agenda reuniões, confirma presença, reagenda quando necessário e mantém sua agenda sempre organizada e otimizada.</p>
                    
                    <ul class="product-features">
                        <li>Agenda reuniões via WhatsApp ou email</li>
                        <li>Confirma presença automaticamente</li>
                        <li>Reagenda conflitos e cancelamentos</li>
                        <li>Integra com Google Calendar/Outlook</li>
                        <li>Envia lembretes automáticos</li>
                    </ul>
                    
                    <a href="#contato" class="product-cta">Quero a Secretária IA</a>
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="section" id="contato">
        <div class="container">
            <h2 class="section-title">Vamos Automatizar Suas Vendas?</h2>
            
            <div class="contact-info">
                <div class="contact-item">
                    <h4>💬 WhatsApp Comercial</h4>
                    <p><a href="https://wa.me/5511999999999" target="_blank">+55 11 99999-9999</a></p>
                </div>
                
                <div class="contact-item">
                    <h4>📧 Email Direto</h4>
                    <p><a href="mailto:vendas@roilabs.com.br">vendas@roilabs.com.br</a></p>
                </div>
                
                <div class="contact-item">
                    <h4>📞 Agendar Demonstração</h4>
                    <p><a href="https://calendly.com/roilabs-demo" target="_blank">Ver SDR IA e Secretária IA Funcionando</a></p>
                </div>
            </div>
        </div>
    </section>

<div id="content" class="site-content" style="display: none;">
