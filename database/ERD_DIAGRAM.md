# ERD Diagram - Educational Platform

## Complete Database Schema (Mermaid Format)

```mermaid
erDiagram
    %% Users and Roles
    users ||--|| teachers : "is a"
    users ||--|| students : "is a"
    
    %% Educational Structure
    stages ||--o{ grades : "contains"
    grades ||--o{ subjects : "contains"
    subjects ||--o{ courses : "has"
    
    %% Users and Courses
    teachers ||--o{ courses : "creates"
    teachers ||--o{ exams : "creates"
    teachers ||--o{ reports : "generates"
    
    students ||--o{ lesson_progress : "tracks"
    students ||--o{ exam_attempts : "attempts"
    students ||--o{ subscriptions : "subscribes"
    students ||--o{ ai_conversations : "chats"
    students ||--o{ reports : "has"
    grades ||--o{ students : "enrolls"
    
    %% Course Content
    courses ||--o{ units : "contains"
    courses ||--o{ exams : "has"
    courses ||--o{ subscriptions : "subscribed"
    
    units ||--o{ lessons : "contains"
    lessons ||--o{ lesson_progress : "tracked"
    lessons ||--o{ ai_conversations : "about"
    
    %% Exams
    exams ||--o{ questions : "has"
    exams ||--o{ exam_attempts : "attempted"
    
    questions ||--o{ student_answers : "answered"
    exam_attempts ||--o{ student_answers : "contains"
    
    %% Payments
    subscriptions ||--o{ payments : "paid via"
    
    %% AI System
    ai_conversations ||--o{ ai_messages : "contains"
    
    %% Notifications
    users ||--o{ notifications : "receives"
    
    %% Reports
    subjects ||--o{ reports : "analyzed in"

    users {
        bigint id PK
        string name
        string email UK
        string password
        enum role "teacher|student|admin"
        timestamp created_at
        timestamp updated_at
    }
    
    teachers {
        bigint id PK
        bigint user_id FK
        string specialty
        string phone
        text bio
        string avatar
        boolean is_active
        timestamp created_at
        timestamp updated_at
    }
    
    students {
        bigint id PK
        bigint user_id FK
        bigint grade_id FK
        string phone
        string parent_phone
        date birth_date
        enum gender
        string avatar
        boolean is_active
        timestamp created_at
        timestamp updated_at
    }
    
    stages {
        bigint id PK
        string name
        string slug UK
        text description
        int order_index
        boolean is_active
        timestamp created_at
    }
    
    grades {
        bigint id PK
        bigint stage_id FK
        string name
        string slug UK
        text description
        int order_index
        boolean is_active
        timestamp created_at
    }
    
    subjects {
        bigint id PK
        bigint grade_id FK
        string name
        string slug
        string icon
        string color
        text description
        boolean is_active
        timestamp created_at
        UK grade_id_slug
    }
    
    courses {
        bigint id PK
        bigint subject_id FK
        bigint teacher_id FK
        string name
        string slug
        text description
        enum type "basic|revision|intensive"
        decimal price
        int duration_days
        int lessons_count
        string thumbnail
        boolean is_active
        timestamp created_at
        UK subject_id_slug
    }
    
    units {
        bigint id PK
        bigint course_id FK
        string name
        text description
        int order_index
        boolean is_active
        timestamp created_at
    }
    
    lessons {
        bigint id PK
        bigint unit_id FK
        string title
        text description
        string video_url
        string video_duration
        string pdf_file
        text notes
        int order_index
        boolean is_free
        boolean is_active
        timestamp created_at
    }
    
    lesson_progress {
        bigint id PK
        bigint student_id FK
        bigint lesson_id FK
        boolean is_completed
        int watch_time_seconds
        timestamp completed_at
        timestamp created_at
        UK student_lesson
    }
    
    exams {
        bigint id PK
        bigint course_id FK
        bigint teacher_id FK
        string title
        text description
        enum type "manual|ai_generated"
        int duration_minutes
        int total_marks
        int passing_marks
        int questions_count
        enum status "draft|published|closed"
        timestamp starts_at
        timestamp ends_at
        boolean allow_multiple_attempts
        boolean show_results_immediately
        boolean is_active
        timestamp created_at
    }
    
    questions {
        bigint id PK
        bigint exam_id FK
        text question_text
        enum question_type "multiple_choice|true_false|essay"
        json options
        text correct_answer
        int points
        text explanation
        int order_index
        boolean is_active
        timestamp created_at
    }
    
    exam_attempts {
        bigint id PK
        bigint exam_id FK
        bigint student_id FK
        timestamp started_at
        timestamp submitted_at
        int time_spent_minutes
        int score
        decimal percentage
        enum status "in_progress|submitted|graded"
        boolean is_passed
        text teacher_notes
        timestamp created_at
        UK exam_student
    }
    
    student_answers {
        bigint id PK
        bigint attempt_id FK
        bigint question_id FK
        text answer_text
        boolean is_correct
        int points_earned
        text ai_feedback
        timestamp created_at
        UK attempt_question
    }
    
    subscriptions {
        bigint id PK
        bigint student_id FK
        bigint course_id FK
        date start_date
        date end_date
        decimal amount
        enum status "active|expired|cancelled|pending"
        boolean auto_renew
        timestamp cancelled_at
        timestamp created_at
        UK student_course
    }
    
    payments {
        bigint id PK
        bigint subscription_id FK
        decimal amount
        string currency
        enum payment_method "card|wallet|bank_transfer|cash"
        enum status "pending|completed|failed|refunded"
        string transaction_id
        string gateway_response
        timestamp paid_at
        timestamp failed_at
        text failure_reason
        timestamp created_at
    }
    
    coupons {
        bigint id PK
        string code UK
        enum type "percentage|fixed"
        decimal value
        decimal max_discount
        int max_uses
        int used_count
        date valid_from
        date valid_until
        boolean is_active
        timestamp created_at
    }
    
    ai_conversations {
        bigint id PK
        bigint student_id FK
        bigint lesson_id FK
        string title
        enum status "active|closed"
        timestamp created_at
    }
    
    ai_messages {
        bigint id PK
        bigint conversation_id FK
        enum role "user|assistant"
        text content
        json metadata
        timestamp created_at
    }
    
    notifications {
        bigint id PK
        bigint user_id FK
        string title
        text message
        enum type "info|success|warning|error"
        string action_url
        boolean is_read
        timestamp read_at
        timestamp created_at
    }
    
    reports {
        bigint id PK
        bigint teacher_id FK
        bigint student_id FK
        bigint subject_id FK
        enum type "student_performance|subject_analytics|financial"
        string title
        json data
        string file_path
        date report_period_start
        date report_period_end
        timestamp created_at
    }
```

---

## Entity Descriptions

### Core Entities

| Entity | Description | Count |
|--------|-------------|-------|
| **users** | Base user accounts (authentication) | 1 per person |
| **teachers** | Teacher profiles and details | 1 per teacher user |
| **students** | Student profiles and details | 1 per student user |

### Educational Structure

| Entity | Description | Relationship |
|--------|-------------|--------------|
| **stages** | Educational stages (Primary, Middle, Secondary) | 3 stages |
| **grades** | Grades within stages (1st, 2nd, 3rd...) | N per stage |
| **subjects** | Academic subjects (Math, Physics, Arabic...) | N per grade |
| **courses** | Course types per subject (Basic, Revision, Intensive) | N per subject |

### Content Management

| Entity | Description | Content |
|--------|-------------|---------|
| **units** | Course units/modules | Lessons grouped by topic |
| **lessons** | Individual lessons with video/PDF | Video, PDF, notes |
| **lesson_progress** | Student progress tracking | Completion status, watch time |

### Assessment System

| Entity | Description | Purpose |
|--------|-------------|---------|
| **exams** | Exams and quizzes | Assessment creation |
| **questions** | Exam questions | Question bank |
| **exam_attempts** | Student exam attempts | Track attempts |
| **student_answers** | Individual answers | Store responses |

### Financial System

| Entity | Description | Tracking |
|--------|-------------|----------|
| **subscriptions** | Course subscriptions | Access control |
| **payments** | Payment transactions | Financial records |
| **coupons** | Discount coupons | Promotions |

### AI & Communication

| Entity | Description | Features |
|--------|-------------|----------|
| **ai_conversations** | AI chat sessions | Student-AI interaction |
| **ai_messages** | Individual messages | Chat history |
| **notifications** | System notifications | User alerts |
| **reports** | Analytics reports | Performance analysis |

---

## Key Relationships Summary

### One-to-One (1:1)
- `users` ↔ `teachers`
- `users` ↔ `students`

### One-to-Many (1:N)
- `stages` → `grades`
- `grades` → `subjects`
- `grades` → `students`
- `subjects` → `courses`
- `teachers` → `courses`
- `teachers` → `exams`
- `teachers` → `reports`
- `courses` → `units`
- `courses` → `exams`
- `courses` → `subscriptions`
- `units` → `lessons`
- `lessons` → `lesson_progress`
- `lessons` → `ai_conversations`
- `students` → `lesson_progress`
- `students` → `exam_attempts`
- `students` → `subscriptions`
- `students` → `ai_conversations`
- `students` → `reports`
- `exams` → `questions`
- `exams` → `exam_attempts`
- `questions` → `student_answers`
- `exam_attempts` → `student_answers`
- `subscriptions` → `payments`
- `ai_conversations` → `ai_messages`
- `users` → `notifications`
- `subjects` → `reports`

### Many-to-Many (N:M)
- `students` ↔ `courses` (via `subscriptions`)

---

## Constraints & Indexes

### Unique Constraints
- `users.email`
- `stages.slug`
- `grades.slug`
- `subjects.[grade_id, slug]`
- `courses.[subject_id, slug]`
- `subscriptions.[student_id, course_id]`
- `exam_attempts.[exam_id, student_id]`
- `student_answers.[attempt_id, question_id]`
- `lesson_progress.[student_id, lesson_id]`
- `coupons.code`

### Foreign Keys (All CASCADE on DELETE)
- All `*_id` fields reference their parent tables

### Indexes
- All primary keys (auto-indexed)
- All foreign keys (auto-indexed)
- Slug fields for URL lookups
- Status fields for filtering
- Email for authentication
