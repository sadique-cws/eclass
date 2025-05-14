<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ env('APP_NAME') }} | a complete Coaching Solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<style>
/* Dashboard Styling */
.dashboard-container {
    padding: 0;
    background-color: #f8f9fa;
    min-height: 100vh;
}

.sidebar-column {
    background-color: #fff;
    box-shadow: 0 0 15px rgba(0,0,0,0.05);
    padding: 0;
    min-height: 100vh;
}

.content-column {
    padding: 25px;
}

.dashboard-header {
    margin-bottom: 30px;
}

.welcome-text {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 5px;
    color: #333;
}

.date-text {
    color: #6c757d;
    font-size: 14px;
}

.stats-cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.stats-card {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    display: flex;
    align-items: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stats-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0,0,0,0.1);
}

.card-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    color: white;
}

.card-info {
    flex: 1;
}

.card-info .count {
    font-size: 28px;
    font-weight: 700;
    margin: 0;
    line-height: 1.2;
}

.card-info .title {
    margin: 0;
    color: #6c757d;
    font-size: 14px;
}

.students-card .card-icon {
    background-color: #ff6b6b;
}

.courses-card .card-icon {
    background-color: #4dabf7;
}

.categories-card .card-icon {
    background-color: #343a40;
}

.admissions-card .card-icon {
    background-color: #ffa94d;
}

.payments-card .card-icon {
    background-color: #40c057;
}

.batches-card .card-icon {
    background-color: #339af0;
}

.admin-sidebar {
    display: flex;
    flex-direction: column;
    height: 100%;
    padding: 20px 0;
}

.sidebar-item {
    display: flex;
    align-items: center;
    padding: 12px 20px;
    color: #495057;
    text-decoration: none;
    transition: all 0.3s ease;
    margin: 2px 0;
    border-left: 3px solid transparent;
}

.sidebar-item:hover {
    background-color: rgba(51, 154, 240, 0.1);
    color: #339af0;
}

.sidebar-item.active {
    background-color: rgba(51, 154, 240, 0.15);
    color: #339af0;
    border-left: 3px solid #339af0;
}

.sidebar-item svg {
    margin-right: 10px;
}

.sidebar-item span {
    font-weight: 500;
}

.sidebar-item.logout {
    margin-top: auto;
    background-color: rgba(255, 107, 107, 0.1);
    color: #ff6b6b;
}

.sidebar-item.logout:hover {
    background-color: rgba(255, 107, 107, 0.2);
}

.section-title {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 15px;
    color: #333;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
}

.recent-activity {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.no-activity {
    color: #adb5bd;
    text-align: center;
    padding: 20px;
}

@media (max-width: 991px) {
    .sidebar-column {
        min-height: auto;
    }
    
    .stats-cards {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }
}

@media (max-width: 767px) {
    .stats-cards {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 576px) {
    .stats-cards {
        grid-template-columns: 1fr;
    }
}
</style>


<style>
/* Include general styling for consistent look */
.table-container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    overflow: hidden;
    margin-bottom: 2rem;
}

.data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th {
    background-color: #f8f9fa;
    padding: 15px;
    text-align: left;
    font-weight: 600;
    color: #495057;
    border-bottom: 1px solid #e9ecef;
}

.data-table td {
    padding: 15px;
    border-bottom: 1px solid #e9ecef;
    color: #495057;
}

.data-table tbody tr:hover {
    background-color: #f8f9fa;
}

.dashboard-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    flex-wrap: wrap;
}

.page-title {
    font-size: 24px;
    font-weight: 600;
    color: #333;
    margin: 0;
}

.header-actions {
    display: flex;
    align-items: center;
    gap: 15px;
}

.search-container {
    position: relative;
}

.search-input {
    padding: 10px 15px 10px 40px;
    border: 1px solid #e9ecef;
    border-radius: 50px;
    background-color: #f8f9fa;
    width: 250px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.search-input:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(51, 154, 240, 0.15);
    border-color: #339af0;
    background-color: white;
}

.search-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #adb5bd;
}

.action-buttons {
    display: flex;
    gap: 10px;
}

.btn-view, .btn-inactive {
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 8px 12px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.2s ease;
}

.btn-view {
    background-color: rgba(51, 154, 240, 0.1);
    color: #339af0;
}

.btn-inactive {
    background-color: rgba(255, 107, 107, 0.1);
    color: #ff6b6b;
}

.btn-view:hover {
    background-color: rgba(51, 154, 240, 0.2);
}

.btn-inactive:hover {
    background-color: rgba(255, 107, 107, 0.2);
}

.student-info {
    display: flex;
    align-items: center;
    gap: 10px;
}

.avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background-color: #339af0;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
}
</style>


<style>
/* Specific to category page */
.category-title {
    display: flex;
    align-items: center;
    gap: 10px;
}

.category-icon {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    background-color: rgba(51, 154, 240, 0.1);
    color: #339af0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-create {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 16px;
    background-color: #40c057;
    color: white;
    border-radius: 5px;
    font-weight: 500;
    text-decoration: none;
    transition: background-color 0.2s ease;
}

.btn-create:hover {
    background-color: #37b24d;
    color: white;
}

.btn-edit {
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 8px 12px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    background-color: rgba(64, 192, 87, 0.1);
    color: #40c057;
    transition: all 0.2s ease;
}

.btn-edit:hover {
    background-color: rgba(64, 192, 87, 0.2);
}

.btn-delete {
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 8px 12px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 500;
    border: none;
    background-color: rgba(255, 107, 107, 0.1);
    color: #ff6b6b;
    cursor: pointer;
    transition: all 0.2s ease;
}

.btn-delete:hover {
    background-color: rgba(255, 107, 107, 0.2);
}

.delete-form {
    margin: 0;
}
</style>


<style>
/* Form styling */
.form-container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    padding: 25px;
    margin-bottom: 2rem;
}

.custom-form {
    max-width: 100%;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #495057;
}

.form-control-custom {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #e9ecef;
    border-radius: 5px;
    font-size: 15px;
    transition: all 0.3s ease;
}

.form-control-custom:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(51, 154, 240, 0.15);
    border-color: #339af0;
}

.form-error {
    margin-top: 5px;
    color: #ff6b6b;
    font-size: 14px;
}

.form-actions {
    display: flex;
    justify-content: flex-end;
    margin-top: 30px;
}

.btn-submit {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    background-color: #40c057;
    color: white;
    border: none;
    border-radius: 5px;
    font-weight: 500;
    font-size: 15px;
    cursor: pointer;
    transition: background-color 0.2s ease;
}

.btn-submit:hover {
    background-color: #37b24d;
}

.btn-back {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 16px;
    background-color: #f8f9fa;
    color: #495057;
    border-radius: 5px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.2s ease;
}

.btn-back:hover {
    background-color: #e9ecef;
    color: #212529;
}
</style>


</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom navbar-dark shadow-sm py-3 px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('public.home') }}">Admin Panel | {{ env('APP_NAME') }}</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                   @auth
                         <li class="nav-item">
                        <a class="nav-link" href="{{ route("public.logout") }}">Hi, {{auth()->user()->name}}</a>
                    </li>
                         <li class="nav-item">
                        <a class="nav-link" href="{{ route("public.logout") }}"><i class="bi bi-box-arrow-right"></i>
 logout</a>
                    </li>
                   @endauth
                </ul>
            </div>
        </div>
    </nav>


    <div class="p-3">
        @section('content')

    @show
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
