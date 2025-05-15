<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ env('APP_NAME') }} | Online Learning Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        /* General Styles */
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #f72585;
            --text-color: #343a40;
            --light-gray: #f8f9fa;
            --border-color: #dee2e6;
            --card-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            --hover-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: var(--text-color);
        }

        /* Section Styling */
        .section-header {
            margin-bottom: 3rem;
        }

        .section-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 12px;
            color: var(--text-color);
        }

        .section-subtitle {
            font-size: 16px;
            color: #6c757d;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Features Section Styles */
        .features-section {
            padding: 80px 0;
            background-color: #fff;
        }

        .feature-card {
            display: flex;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            height: 100%;
            padding: 30px;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--hover-shadow);
        }

        .feature-icon {
            flex-shrink: 0;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: rgba(67, 97, 238, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            color: var(--primary-color);
        }

        .feature-content {
            flex-grow: 1;
        }

        .feature-content h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 12px;
            color: var(--text-color);
        }

        .feature-content p {
            font-size: 15px;
            color: #6c757d;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .feature-list li {
            position: relative;
            padding-left: 24px;
            margin-bottom: 8px;
            font-size: 14px;
            color: #6c757d;
        }

        .feature-list li:before {
            content: "";
            position: absolute;
            left: 0;
            top: 8px;
            width: 14px;
            height: 14px;
            background-color: rgba(67, 97, 238, 0.2);
            border-radius: 50%;
        }

        .feature-list li:after {
            content: "✓";
            position: absolute;
            left: 3px;
            top: -1px;
            font-size: 10px;
            color: var(--primary-color);
        }

        /* Course Section Styles */
        .courses-section {
            padding: 80px 0;
        }

        .section-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 12px;
            color: var(--text-color);
        }

        .section-subtitle {
            font-size: 16px;
            color: #6c757d;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Course Card Styles */
        .course-card {
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--hover-shadow);
        }

        .course-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .course-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .course-card:hover .course-image img {
            transform: scale(1.05);
        }

        .course-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--accent-color);
            color: white;
            padding: 6px 12px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .course-content {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .course-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 12px;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 50px;
        }

        .course-instructor {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 16px;
        }

        .course-instructor svg {
            margin-right: 6px;
        }

        .course-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--border-color);
        }

        .course-info {
            display: flex;
            gap: 12px;
        }

        .info-item {
            display: flex;
            align-items: center;
            font-size: 13px;
            color: #6c757d;
        }

        .info-item svg {
            margin-right: 4px;
        }

        .course-rating {
            display: flex;
            align-items: center;
            font-size: 14px;
            font-weight: 600;
            color: #ff9800;
        }

        .course-rating svg {
            margin-right: 4px;
        }

        .course-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .course-price {
            display: flex;
            flex-direction: column;
        }

        .original-price {
            font-size: 14px;
            color: #6c757d;
            text-decoration: line-through;
        }

        .discounted-price {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .current-price {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .btn-enroll {
            background-color: var(--primary-color);
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-enroll:hover {
            background-color: var(--secondary-color);
            color: white;
        }

        .view-all-courses {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
            padding: 12px 24px;
            border: 2px solid var(--primary-color);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .view-all-courses:hover {
            background-color: var(--primary-color);
            color: white;
        }

        /* Navigation enhancements */
        .navbar {
            padding: 15px 0;
        }

        .navbar-brand {
            color: var(--primary-color);
        }

        .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        /* Footer enhancements */
        footer {
            background-color: #212529;
        }

        footer a {
            transition: opacity 0.3s ease;
        }

        footer a:hover {
            opacity: 0.8;
            text-decoration: none;
        }

        /* Course View Page Styles */
        .course-hero {
            padding: 70px 0;
            background-color: #f8f9fa;
            margin-bottom: 40px;
        }

        .course-hero-content {
            padding-right: 30px;
        }

        .course-category {
            display: inline-block;
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary-color);
            padding: 6px 12px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .course-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #212529;
            line-height: 1.2;
        }

        .course-description {
            font-size: 16px;
            color: #6c757d;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .course-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 25px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            color: #495057;
            font-size: 15px;
        }

        .meta-item svg {
            margin-right: 8px;
            color: var(--primary-color);
        }

        .course-card-large {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
        }

        .course-image {
            position: relative;
            height: 240px;
            overflow: hidden;
        }

        .course-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .course-pricing {
            padding: 25px;
            border-bottom: 1px solid var(--border-color);
        }

        .price-container {
            margin-bottom: 20px;
        }

        .original-price {
            font-size: 16px;
            color: #6c757d;
            text-decoration: line-through;
            margin-bottom: 5px;
        }

        .discounted-price, .current-price {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .discount-badge {
            display: inline-block;
            background-color: #ffc107;
            color: #212529;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 600;
            margin-left: 10px;
        }

        .enrollment-actions {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .btn-enroll-now {
            display: block;
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 14px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-enroll-now:hover {
            background-color: var(--secondary-color);
            color: white;
        }

        .btn-add-wishlist {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary-color);
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn-add-wishlist:hover {
            background-color: rgba(67, 97, 238, 0.2);
        }

        .course-includes {
            padding: 25px;
        }

        .course-includes h4 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .includes-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .includes-list li {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            color: #495057;
        }

        .includes-list li svg {
            margin-right: 10px;
            min-width: 18px;
            color: var(--primary-color);
        }

        .course-details-section {
            padding-bottom: 60px;
        }

        .course-tabs {
            margin-bottom: 30px;
        }

        .nav-tabs {
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 30px;
        }

        .nav-tabs .nav-link {
            color: #6c757d;
            font-weight: 500;
            padding: 12px 20px;
            border: none;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .nav-tabs .nav-link:hover {
            color: var(--primary-color);
        }

        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            border-bottom-color: var(--primary-color);
            background-color: transparent;
        }

        .course-overview h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #212529;
        }

        .course-full-description {
            margin-bottom: 30px;
            color: #495057;
            line-height: 1.7;
        }

        .learning-outcomes {
            list-style: none;
            padding: 0;
            margin: 0 0 30px 0;
        }

        .learning-outcomes li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 12px;
            padding-left: 10px;
        }

        .learning-outcomes li svg {
            margin-right: 10px;
            min-width: 16px;
            color: #40c057;
        }

        .requirements-list {
            padding-left: 18px;
            margin-bottom: 30px;
        }

        .requirements-list li {
            margin-bottom: 10px;
            color: #495057;
        }

        .course-curriculum h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #212529;
        }

        .curriculum-info {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #6c757d;
            margin-bottom: 20px;
            font-size: 15px;
        }

        .accordion-item {
            border: 1px solid var(--border-color);
            margin-bottom: 15px;
            border-radius: 8px;
            overflow: hidden;
        }

        .accordion-button {
            padding: 15px 20px;
            font-weight: 600;
            background-color: white;
            color: #212529;
            border: none;
            box-shadow: none;
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(67, 97, 238, 0.05);
            color: var(--primary-color);
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: var(--border-color);
        }

        .module-lessons {
            margin-left: auto;
            font-size: 14px;
            color: #6c757d;
            font-weight: normal;
        }

        .lessons-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .lesson-item {
            display: flex;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .lesson-item:last-child {
            border-bottom: none;
        }

        .lesson-icon {
            margin-right: 15px;
            color: var(--primary-color);
        }

        .lesson-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .lesson-title {
            font-weight: 500;
            color: #495057;
        }

        .lesson-duration {
            font-size: 14px;
            color: #6c757d;
        }

        .instructor-profile {
            margin-bottom: 30px;
        }

        .instructor-bio {
            display: flex;
            margin-bottom: 20px;
        }

        .instructor-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .instructor-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .instructor-info h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #212529;
        }

        .instructor-designation {
            font-size: 15px;
            color: #6c757d;
            margin-bottom: 15px;
        }

        .instructor-stats {
            display: flex;
            gap: 20px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-value {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary-color);
            display: block;
        }

        .stat-label {
            font-size: 14px;
            color: #6c757d;
        }

        .instructor-description {
            line-height: 1.7;
            color: #495057;
        }

        .reviews-summary {
            display: flex;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-color);
        }

        .overall-rating {
            width: 200px;
            text-align: center;
            padding-right: 30px;
            border-right: 1px solid var(--border-color);
            margin-right: 30px;
        }

        .rating-number {
            font-size: 48px;
            font-weight: 700;
            color: #212529;
            margin-bottom: 5px;
        }

        .rating-stars {
            margin-bottom: 10px;
            color: #ffc107;
        }

        .total-reviews {
            font-size: 14px;
            color: #6c757d;
        }

        .rating-breakdown {
            flex-grow: 1;
        }

        .rating-row {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .star-label {
            width: 70px;
            font-size: 14px;
            color: #6c757d;
        }

        .progress {
            flex-grow: 1;
            height: 8px;
            margin: 0 15px;
            background-color: #e9ecef;
        }

        .progress-bar {
            background-color: #ffc107;
        }

        .percentage {
            width: 40px;
            font-size: 14px;
            color: #6c757d;
            text-align: right;
        }

        .review-list h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #212529;
        }

        .review-item {
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 1px solid var(--border-color);
        }

        .reviewer-info {
            display: flex;
            margin-bottom: 15px;
        }

        .reviewer-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .reviewer-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .reviewer-details {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .reviewer-name {
            font-weight: 600;
            color: #212529;
            margin-bottom: 3px;
        }

        .review-date {
            font-size: 14px;
            color: #6c757d;
        }

        .review-rating {
            margin-bottom: 10px;
            color: #6c757d;
        }

        .review-rating svg.filled {
            color: #ffc107;
        }

        .review-comment {
            color: #495057;
            line-height: 1.6;
        }

        .more-reviews {
            text-align: center;
            margin-top: 20px;
        }

        .btn-more-reviews {
            background-color: transparent;
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-more-reviews:hover {
            background-color: rgba(67, 97, 238, 0.1);
        }

        .related-courses {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: var(--card-shadow);
            margin-bottom: 30px;
        }

        .related-courses h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #212529;
        }

        .related-course-item {
            display: flex;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-color);
        }

        .related-course-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .related-course-image {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            overflow: hidden;
            margin-right: 15px;
        }

        .related-course-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .related-course-info h4 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #212529;
        }

        .related-course-info .meta {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 5px;
        }

        .related-course-info .separator {
            margin: 0 5px;
        }

        .related-course-info .price {
            font-weight: 600;
            color: var(--primary-color);
        }

        .course-faq {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: var(--card-shadow);
        }

        .course-faq h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #212529;
        }

        .cta-section {
            background-color: var(--primary-color);
            color: white;
            padding: 60px 0;
            text-align: center;
            margin-top: 40px;
        }

        .cta-content h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .cta-content p {
            font-size: 18px;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-primary {
            background-color: white;
            color: var(--primary-color);
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: rgba(255, 255, 255, 0.9);
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Enhanced CTA Section Styles */
        .enhanced-cta-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 70px 0;
            position: relative;
            overflow: hidden;
        }

        .enhanced-cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='rgba(255,255,255,0.05)' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.5;
            z-index: 0;
        }

        .cta-wrapper {
            position: relative;
            z-index: 1;
            background-color: rgba(67, 97, 238, 0.2);
            border-radius: 16px;
            padding: 40px;
            backdrop-filter: blur(5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .cta-label {
            display: inline-block;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
            letter-spacing: 0.5px;
        }

        .cta-content h2 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .cta-content p {
            font-size: 18px;
            margin-bottom: 25px;
            opacity: 0.9;
            line-height: 1.6;
        }

        .highlight-text {
            color: #fff;
            font-weight: 700;
            position: relative;
            z-index: 1;
        }

        .highlight-text::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 2px;
            width: 100%;
            height: 8px;
            background-color: rgba(247, 37, 133, 0.4);
            z-index: -1;
            border-radius: 4px;
        }

        .cta-features {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 30px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
        }

        .feature-item svg {
            margin-right: 8px;
        }

        .cta-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .btn-enroll-cta {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: white;
            color: var(--primary-color);
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-enroll-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
            color: var(--primary-color);
        }

        .btn-team-pricing {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: rgba(255, 255, 255, 0.15);
            color: white;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-team-pricing:hover {
            background-color: rgba(255, 255, 255, 0.25);
        }

        .cta-testimonial {
            background-color: white;
            border-radius: 16px;
            padding: 30px;
            height: 100%;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .quote-icon {
            color: var(--primary-color);
            opacity: 0.2;
            margin-bottom: 15px;
        }

        .quote-text {
            font-size: 16px;
            line-height: 1.7;
            color: var(--text-color);
            margin-bottom: 25px;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
            border: 3px solid var(--light-gray);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            font-size: 18px;
            font-weight: 600;
            margin: 0 0 4px 0;
            color: var(--text-color);
        }

        .author-info p {
            font-size: 14px;
            color: #6c757d;
            margin: 0 0 4px 0;
        }

        .rating {
            color: #ffc107;
        }

        .enrollment-stats {
            background-color: #f8f9fa;
            padding: 40px 0;
        }

        .stats-wrapper {
            padding: 0 20px;
        }

        .stat-item {
            padding: 20px 10px;
        }

        .stat-number {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 14px;
            color: #6c757d;
        }

        @media (max-width: 991px) {
            .course-hero-content {
                padding-right: 0;
                margin-bottom: 30px;
            }
            
            .reviews-summary {
                flex-direction: column;
            }
            
            .overall-rating {
                width: 100%;
                border-right: none;
                padding-right: 0;
                margin-right: 0;
                padding-bottom: 20px;
                margin-bottom: 20px;
                border-bottom: 1px solid var(--border-color);
            }
        }

        @media (max-width: 767px) {
            .course-meta {
                flex-direction: column;
                gap: 10px;
            }
            
            .instructor-bio {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            
            .instructor-image {
                margin-right: 0;
                margin-bottom: 15px;
            }
            
            .instructor-stats {
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="/"><i class="bi bi-book-half me-2"></i>{{ env('APP_NAME') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/courses">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    @guest
                        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                        <li class="nav-item"><a class="btn btn-primary ms-2" href="/register">Get Started</a></li>
                    @endguest
                    @auth
                        <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @section('content')
    @show

    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>{{ env('APP_NAME') }}</h5>
                    <p>Empowering education through technology</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/courses" class="text-light">Courses</a></li>
                        <li><a href="/about" class="text-light">About Us</a></li>
                        <li><a href="/contact" class="text-light">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect With Us</h5>
                    <div class="d-flex gap-3 fs-5">
                        <a href="#" class="text-light"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
@yield('js')

</body>

</html>
