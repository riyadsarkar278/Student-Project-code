
CREATE DATABASE IF NOT EXISTS student_db;
USE student_db;
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,              -- Unique ID for each student
    name VARCHAR(100) NOT NULL,                     -- Student name
    email VARCHAR(100) UNIQUE NOT NULL,             -- Email must be unique
    phone VARCHAR(15),                              -- Phone number (optional)
    course VARCHAR(50) NOT NULL,                    -- Selected course
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP  -- Auto time of registration
);

INSERT INTO students (name, email, phone, course) VALUES
('Riyad', 'riyad@gmail.com', '01711111111', 'Computer Science'),
('Karim', 'karim@gmail.com', '01822222222', 'Business'),
('Sumaiya', 'sumaiya@gmail.com', '01933333333', 'Mathematics');

