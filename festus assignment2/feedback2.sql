CREATE DATABASE campaign_feedback;

USE campaign_feedback;

CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    feedback TEXT,
    rating INT,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
