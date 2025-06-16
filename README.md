# DevOps Laravel + Nuxt.js Fullstack Project

A complete fullstack boilerplate combining **Laravel API (PHP)** and **Nuxt.js frontend (Vue 3)** — fully containerized using **Docker**, configured with **Nginx + SSL**, and ready for **CI/CD** integration.

---

## 🚀 Features

- 🔧 Laravel 10 API (RESTful)
- ⚙️ Nuxt.js 3 (Vue 3 Composition API)
- 🐳 Dockerized (Multi-service setup)
- 🌐 Nginx as reverse proxy with SSL
- 📦 Composer & Node package managers
- 🧪 Ready for testing & CI/CD
- 📁 Structured folder organization

---

## 🗂️ Folder Structure

```
devops-laravel-nuxt/
├── backend/              # Laravel backend
├── frontend/             # Nuxt.js frontend
├── docker/               # Dockerfiles & scripts
│   └── nginx/
│       └── nginx.conf    # Nginx reverse proxy config
├── docker-compose.yml    # Docker multi-service config
└── README.md
```

---

## 🐳 How to Run the Project (Dev)

1. **Clone the repository**

```bash
git clone https://github.com/esraa4antar/devops-laravel-nuxt.git
cd devops-laravel-nuxt
```

2. **Run with Docker Compose**

```bash
docker-compose up --build
```

3. Visit:
- API: `http://localhost:8000/api`
- Frontend: `http://localhost:3000`

---

## 🔐 SSL Self-Signed

- Configured using OpenSSL
- Mounted via Docker to Nginx

---

## ✅ DevOps Highlights

- ✅ Docker multi-service (Laravel, Nuxt, Nginx)
- ✅ Nginx reverse proxy with custom `nginx.conf`
- ✅ Self-signed certificate included
- ✅ Laravel `.env` & Nuxt config via volumes
- ✅ Ready for GitHub Actions integration

---

## 🔧 Tech Stack

| Tool         | Purpose                  |
|--------------|---------------------------|
| Laravel      | Backend API (PHP)         |
| Nuxt.js      | Frontend SPA (Vue 3)      |
| Docker       | Containerization          |
| Docker Compose | Multi-service orchestration |
| Nginx        | Reverse proxy             |
| MySQL        | Database                  |
| GitHub       | Version control + CI/CD   |

---

## 👩‍💻 Author

**Esraa Antar**  
DevOps Engineer | [GitHub](https://github.com/esraa4antar)

---

## 📌 Note

This project is built for DevOps learning, CI/CD integration, and deployment showcase purposes.
