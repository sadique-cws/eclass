@extends('landing.publiclayout')

@section('title', $course->title)

@section('content')
<div class="course-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="course-hero-content">
                    <div class="course-category">{{ $course->category->cat_title ?? 'Course' }}</div>
                    <h1 class="course-title">{{ $course->title }}</h1>
                    <p class="course-description">{{ $course->description }}</p>
                    
                    <div class="course-meta">
                        <div class="meta-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            <span>Instructor: {{ $course->author }}</span>
                        </div>
                        <div class="meta-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg>
                            <span>Duration: {{ $course->duration ?? '8' }} Weeks</span>
                        </div>
                        <div class="meta-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-12a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3z"/>
                            </svg>
                            <span>{{ $course->lessons ?? '24' }} Lessons</span>
                        </div>
                        <div class="meta-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <span>{{ $course->rating ?? '4.8' }} ({{ $course->reviews ?? '128' }} reviews)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="course-card-large">
                    <div class="course-image">
                        <img src="{{ asset('storage/'.$course->image) }}" alt="{{ $course->title }}">
                    </div>
                    <div class="course-pricing">
                        @if(isset($course->discount_price) && $course->discount_price > 0)
                            <div class="price-container">
                                <div class="original-price">₹{{ $course->fees }}</div>
                                <div class="discounted-price">₹{{ $course->discount_price }}</div>
                                <div class="discount-badge">{{ round((($course->fees - $course->discount_price) / $course->fees) * 100) }}% OFF</div>
                            </div>
                        @else
                            <div class="price-container">
                                <div class="current-price">₹{{ $course->fees }}</div>
                            </div>
                        @endif
                        
                        <div class="enrollment-actions">
                            <form action="{{ route('razorpay.payment.store') }}" method="post">
                                @csrf
                                <button type="submit" id="rzp-button" class="btn-enroll-now">Enroll Now</button>
                            </form>
                            <button class="btn-add-wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                </svg>
                                Add to Wishlist
                            </button>
                        </div>
                    </div>
                    
                    <div class="course-includes">
                        <h4>This Course Includes:</h4>
                        <ul class="includes-list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .488.59l-.5 3a.5.5 0 1 1-.976-.164l.342-2.03H6.323l.36 2.54a.5.5 0 0 1-.985.14l-.5-3.5z"/>
                                    <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
                                </svg>
                                <span>{{ $course->lessons ?? '24' }} on-demand video lessons</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.5 8.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1h4zm0-3a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1h4z"/>
                                </svg>
                                <span>Downloadable resources</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
                                </svg>
                                <span>Full lifetime access</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                                    <path d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                                <span>Completion Certificate</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5ZM3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.58 26.58 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.933.933 0 0 1-.765.935c-.845.147-2.34.346-4.235.346-1.895 0-3.39-.2-4.235-.346A.933.933 0 0 1 3 9.219V8.062Zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a24.767 24.767 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25.286 25.286 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135Z"/>
                                    <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2V1.866ZM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5Z"/>
                                </svg>
                                <span>Mobile and desktop access</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="course-details-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="course-tabs">
                    <ul class="nav nav-tabs" id="courseTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor" type="button" role="tab" aria-controls="instructor" aria-selected="false">Instructor</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="courseTabContent">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                            <div class="course-overview">
                                <h3>About This Course</h3>
                                <div class="course-full-description">
                                    {!! $course->description !!}
                                </div>
                                
                                <h3>What You'll Learn</h3>
                                <ul class="learning-outcomes">
                                    @if(isset($course->outcomes) && is_array($course->outcomes))
                                        @foreach($course->outcomes as $outcome)
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                                </svg>
                                                <span>{{ $outcome }}</span>
                                            </li>
                                        @endforeach
                                    @else
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                            </svg>
                                            <span>Master the core concepts and principles of {{ $course->category->cat_title ?? 'this subject' }}</span>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                            </svg>
                                            <span>Apply theoretical knowledge to real-world scenarios</span>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                            </svg>
                                            <span>Develop practical skills valued by employers</span>
                                        </li>
                                    @endif
                                </ul>
                                
                                <h3>Requirements</h3>
                                <ul class="requirements-list">
                                    @if(isset($course->requirements) && is_array($course->requirements))
                                        @foreach($course->requirements as $requirement)
                                            <li>{{ $requirement }}</li>
                                        @endforeach
                                    @else
                                        <li>Basic knowledge of {{ $course->category->cat_title ?? 'the subject' }}</li>
                                        <li>A computer with internet connection</li>
                                        <li>Willingness to learn and practice</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                            <div class="course-curriculum">
                                <h3>Course Content</h3>
                                <div class="curriculum-info">
                                    <span>{{ $course->lessons ?? '24' }} lessons</span>
                                    <span>•</span>
                                    <span>{{ $course->duration ?? '8' }} weeks</span>
                                </div>
                                
                                <div class="accordion" id="curriculumAccordion">
                                    @for($i = 1; $i <= 4; $i++)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $i }}">
                                            <button class="accordion-button {{ $i > 1 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $i }}" aria-expanded="{{ $i === 1 ? 'true' : 'false' }}" aria-controls="collapse{{ $i }}">
                                                Module {{ $i }}: {{ ['Introduction', 'Core Concepts', 'Advanced Techniques', 'Final Project'][$i-1] }}
                                                <span class="module-lessons">{{ rand(3, 7) }} lessons</span>
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $i }}" class="accordion-collapse collapse {{ $i === 1 ? 'show' : '' }}" aria-labelledby="heading{{ $i }}" data-bs-parent="#curriculumAccordion">
                                            <div class="accordion-body">
                                                <ul class="lessons-list">
                                                    @for($j = 1; $j <= rand(3, 7); $j++)
                                                    <li class="lesson-item">
                                                        <div class="lesson-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                                                            </svg>
                                                        </div>
                                                        <div class="lesson-info">
                                                            <span class="lesson-title">Lesson {{ $j }}: Sample Lesson Title</span>
                                                            <span class="lesson-duration">{{ rand(10, 60) }} min</span>
                                                        </div>
                                                    </li>
                                                    @endfor
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                            <div class="instructor-profile">
                                <div class="instructor-bio">
                                    <div class="instructor-image">
                                        <img src="https://randomuser.me/api/portraits/men/{{ rand(1, 99) }}.jpg" alt="{{ $course->author }}">
                                    </div>
                                    <div class="instructor-info">
                                        <h3>{{ $course->author }}</h3>
                                        <p class="instructor-designation">{{ $course->category->cat_title ?? 'Subject' }} Expert</p>
                                        <div class="instructor-stats">
                                            <div class="stat-item">
                                                <span class="stat-value">{{ rand(5, 50) }}</span>
                                                <span class="stat-label">Courses</span>
                                            </div>
                                            <div class="stat-item">
                                                <span class="stat-value">{{ rand(500, 20000) }}</span>
                                                <span class="stat-label">Students</span>
                                            </div>
                                            <div class="stat-item">
                                                <span class="stat-value">{{ rand(10, 1000) }}</span>
                                                <span class="stat-label">Reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="instructor-description">
                                    <p>{{ $course->author }} is a passionate educator with over {{ rand(3, 15) }} years of experience in teaching {{ $course->category->cat_title ?? 'this subject' }}. They hold a degree from a prestigious university and have worked with leading organizations in the industry.</p>
                                    <p>Their teaching approach combines theoretical knowledge with practical applications, making complex concepts easy to understand for students of all levels.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="course-reviews">
                                <div class="reviews-summary">
                                    <div class="overall-rating">
                                        <div class="rating-number">{{ $course->rating ?? '4.8' }}</div>
                                        <div class="rating-stars">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= floor($course->rating ?? 4.8))
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                    </svg>
                                                @elseif($i-1 < $course->rating ?? 4.8)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                                    </svg>
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                    </svg>
                                                @endif
                                            @endfor
                                        </div>
                                        <div class="total-reviews">{{ $course->reviews ?? '128' }} reviews</div>
                                    </div>
                                    
                                    <div class="rating-breakdown">
                                        @for($i = 5; $i >= 1; $i--)
                                            <div class="rating-row">
                                                <div class="star-label">{{ $i }} stars</div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: {{ $i === 5 ? '70' : ($i === 4 ? '20' : ($i === 3 ? '7' : ($i === 2 ? '2' : '1'))) }}%" aria-valuenow="{{ $i === 5 ? '70' : ($i === 4 ? '20' : ($i === 3 ? '7' : ($i === 2 ? '2' : '1'))) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="percentage">{{ $i === 5 ? '70' : ($i === 4 ? '20' : ($i === 3 ? '7' : ($i === 2 ? '2' : '1'))) }}%</div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                                
                                <div class="review-list">
                                    <h3>Student Feedback</h3>
                                    
                                    @for($i = 1; $i <= 3; $i++)
                                        <div class="review-item">
                                            <div class="reviewer-info">
                                                <div class="reviewer-avatar">
                                                    <img src="https://randomuser.me/api/portraits/{{ $i % 2 == 0 ? 'women' : 'men' }}/{{ rand(1, 99) }}.jpg" alt="Reviewer">
                                                </div>
                                                <div class="reviewer-details">
                                                    <div class="reviewer-name">Student {{ $i }}</div>
                                                    <div class="review-date">{{ date('F d, Y', strtotime("-" . rand(1, 30) . " days")) }}</div>
                                                </div>
                                            </div>
                                            <div class="review-rating">
                                                @for($j = 1; $j <= 5; $j++)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="{{ $j <= rand(4, 5) ? 'filled' : '' }}" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                    </svg>
                                                @endfor
                                            </div>
                                            <div class="review-comment">
                                                <p>{{ ['Great course! The instructor explained everything clearly. I learned a lot and was able to apply the knowledge immediately.', 'Very informative and well-structured. The practical exercises were particularly helpful. Highly recommended!', 'Excellent content and delivery. The course exceeded my expectations and provided valuable insights.'][$i-1] }}</p>
                                            </div>
                                        </div>
                                    @endfor
                                    
                                    <div class="more-reviews">
                                        <button class="btn-more-reviews">Load More Reviews</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="related-courses">
                    <h3>Related Courses</h3>
                    <div class="related-list">
                        @for($i = 1; $i <= 3; $i++)
                            <div class="related-course-item">
                                <div class="related-course-image">
                                    <img src="https://source.unsplash.com/random/300x200?education,{{ $i }}" alt="Related Course">
                                </div>
                                <div class="related-course-info">
                                    <h4>Related Course Title {{ $i }}</h4>
                                    <div class="meta">
                                        <span class="duration">{{ rand(4, 12) }} Weeks</span>
                                        <span class="separator">•</span>
                                        <span class="level">{{ ['Beginner', 'Intermediate', 'Advanced'][rand(0, 2)] }}</span>
                                    </div>
                                    <div class="price">₹{{ rand(5, 15) }}99</div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                
                <div class="course-faq">
                    <h3>Frequently Asked Questions</h3>
                    <div class="accordion" id="faqAccordion">
                        @foreach(['Is this course suitable for beginners?', 'Will I get a certificate after completion?', 'How long do I have access to the course?', 'Can I get a refund if I\'m not satisfied?'] as $index => $question)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeading{{ $index }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $index }}" aria-expanded="false" aria-controls="faqCollapse{{ $index }}">
                                        {{ $question }}
                                    </button>
                                </h2>
                                <div id="faqCollapse{{ $index }}" class="accordion-collapse collapse" aria-labelledby="faqHeading{{ $index }}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>{{ ['Yes, this course is designed to accommodate beginners. We start with the fundamentals and gradually progress to more advanced topics.', 'Yes, you will receive a certificate of completion that you can share on your resume or LinkedIn profile.', 'You get lifetime access to the course materials, including any future updates.', 'We offer a 30-day money-back guarantee if you\'re not completely satisfied with the course.'][$index] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Start Learning?</h2>
            <p>Join {{ $course->title }} today and take the first step towards mastering {{ $course->category->cat_title ?? 'this subject' }}.</p>
            <a href="" class="btn-primary">Enroll Now</a>
        </div>
    </div>
</section>

<section class="enhanced-cta-section">
    <div class="container">
        <div class="cta-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="cta-content">
                        <span class="cta-label">Start Your Learning Journey</span>
                        <h2>Ready to Master {{ $course->category->cat_title ?? 'This Course' }}?</h2>
                        <p>Join <strong>{{ $course->title }}</strong> today and gain the skills that will advance your career. Already <span class="highlight-text">{{ rand(150, 500) }}+ students</span> enrolled this month!</p>
                        
                        <div class="cta-features">
                            <div class="feature-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span>30-Day Money-Back Guarantee</span>
                            </div>
                            <div class="feature-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span>Lifetime Access to Course Updates</span>
                            </div>
                            <div class="feature-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span>Downloadable Course Resources</span>
                            </div>
                        </div>
                        
                        <div class="cta-actions">
                            <a href="" class="btn-enroll-cta">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16v9zm-4.785-6.412a.5.5 0 0 0-.702.061l-2.5 2.5a.5.5 0 0 0 0 .707l2.5 2.5a.5.5 0 0 0 .707-.707l-1.657-1.657h4.165a1 1 0 0 1 1 1v.274a.5.5 0 0 0 1 0v-.274a2 2 0 0 0-2-2h-4.162l1.657-1.657a.5.5 0 0 0-.065-.644l-.027-.027zM7.293 13.293L6.646 12.5h4.164a.5.5 0 0 0 0-1H6.646l.647-.793a.5.5 0 0 0-.765-.648l-1.5 1.75a.5.5 0 0 0 0 .686l1.5 1.75a.5.5 0 0 0 .765-.652z"/>
                                </svg>
                                Enroll Now
                            </a>
                            <button class="btn-team-pricing">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                </svg>
                                Team Pricing
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="cta-testimonial">
                        <div class="testimonial-content">
                            <div class="quote-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                                </svg>
                            </div>
                            <p class="quote-text">This course completely transformed my understanding of {{ $course->category->cat_title ?? 'the subject' }}. The instructor is incredibly knowledgeable and explains complex concepts in a way that's easy to understand.</p>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="https://randomuser.me/api/portraits/women/{{ rand(1, 99) }}.jpg" alt="Student Testimonial">
                                </div>
                                <div class="author-info">
                                    <h4>Sarah Johnson</h4>
                                    <p>Web Developer</p>
                                    <div class="rating">
                                        @for($i = 0; $i < 5; $i++)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="enrollment-stats">
    <div class="container">
        <div class="stats-wrapper">
            <div class="row text-center">
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">{{ rand(2000, 5000) }}+</div>
                        <div class="stat-label">Students Enrolled</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">{{ rand(30, 80) }}</div>
                        <div class="stat-label">Countries Represented</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">{{ rand(95, 99) }}%</div>
                        <div class="stat-label">Completion Rate</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">{{ rand(20, 50) }}+</div>
                        <div class="stat-label">Career Opportunities</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
        document.getElementById('rzp-button').onclick = function(e){
            e.preventDefault();

            var options = {
                "key": "{{ env('RAZORPAY_KEY') }}",
                "amount": "10000", // amount in paise (₹100)
                "currency": "INR",
                "name": "Your Company",
                "description": "Test Transaction",
                "handler": function (response){
                    // Send payment ID to server
                    var form = document.forms[0];
                    var input = document.createElement("input");
                    input.type = "hidden";
                    input.name = "razorpay_payment_id";
                    input.value = response.razorpay_payment_id;
                    form.appendChild(input);
                    form.submit();
                },
                "theme": {
                    "color": "#3399cc"
                }
            };
            var rzp = new Razorpay(options);
            rzp.open();
        }
    </script>
@endsection