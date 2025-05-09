<div class="bg-warning py-5 w-100">
    <div class="container px-4 px-lg-5 d-flex flex-column align-items-start justify-content-center text-dark">
        <h1 class="display-3 fw-bold mb-3">
            Welcome to <span class="text-dark">{{ env("APP_NAME") }}</span> Portal
        </h1>
        <p class="lead mb-4">
            Discover the smarter way to learn. Our platform brings expert-led courses, interactive content, and the flexibility you need — all in one place. Start your learning journey today!
        </p>
        <a href="{{ route('public.apply') }}" class="btn btn-lg btn-dark shadow-sm px-4 py-2">
            <i class="bi bi-person-plus-fill me-2"></i> Join Now
        </a>
    </div>
</div>
