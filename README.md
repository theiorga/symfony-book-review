# Book Review App

A robust web application built with Symfony that allows users to create, view, edit, and delete book reviews. It supports user registration, authentication, and secure access—ensuring that only authenticated users can modify their added reviews / books, while anyone can view them. Users can also upload book cover images to enhance the review display.

## Features

- **User Authentication and Authorization**
  - Users can register, log in, and log out.
  - Only authenticated users can create, edit, or delete reviews.
  - Users can only modify their own reviews and added books.

- **Book Reviews Management**
  - List, create, view, edit, and delete book reviews.
  - Review information includes:
    - Book title
    - Author
    - Number of pages
    - Summary
    - Genre
    - Reviewer's name
    - Actual review text
  - Multiple users can review the same book. If a book doesn’t exist, a user can add it, enabling subsequent reviews by others.

- **Media Uploads**
  - Optionally upload and display book cover images.

## Technology Stack

- **Backend:** Symfony (PHP)
- **Database:** SQLite (with persistence via Docker volumes)
- **Containerization:** Docker and Docker Compose
- **Web Server:** Nginx
- **Cloud Infrastructure:**
  - Hosted on an AWS EC2 instance running Ubuntu
  - Uses an AWS S3 bucket for additional storage

## Deployment

The app is deployed on an AWS EC2 instance. To test it, simply open your web browser and navigate to:

[http://44.203.137.108(http://44.203.137.108)

> **Note:** The application is served over HTTP only, as HTTPS is not configured.

## Local Development

To run the application locally using Docker:

1. **Clone the repository:**
   git clone https://github.com/yourusername/book-review-app.git
   cd book-review-app
Build and start the containers:
docker-compose up -d --build
