# HALCON ORDER TRACKING SYSTEM

## Project Overview

This project consists of the analysis, design, and development of a web application for **Halcon**, a construction material distributor company. The purpose of the system is to automate internal processes and allow customers to track the status of their orders in real time.

The application was developed using **Laravel 11**, **Blade**, **Bootstrap 5**, and **PostgreSQL/MySQL** following best programming practices and role-based security.

---

# Problem Description

Halcon currently manages its order lifecycle manually, generating inefficiencies in:

- Order tracking
- Communication between departments
- Delivery evidence management
- Customer service
- Inventory coordination

The proposed solution digitalizes the complete order workflow and centralizes all operations into a single platform.

---

# System Objectives

- Automate the order lifecycle.
- Implement role-based access control.
- Allow customers to check order status using customer number and invoice number.
- Store delivery evidence through uploaded photos.
- Implement logical deletion of orders.
- Provide search filters by invoice, customer number, date, and status.
- Improve communication between departments.

---

# System Roles

The system includes the following roles:

| Role | Description |
|------|-------------|
| Administrator | Creates users and assigns roles |
| Sales | Registers customer orders |
| Warehouse | Prepares materials and updates order status |
| Purchasing | Manages material acquisition |
| Route | Delivers orders and uploads delivery evidence |
| Customer | Checks order status without registration |

---

# Order Lifecycle

The application manages the following order statuses:

1. **Ordered**
2. **In Process**
3. **In Route**
4. **Delivered**

Each status represents a stage in the order fulfillment process.

---

# Main Features

## Customer Features

- Track orders using:
  - Customer number
  - Invoice number
- View current order status
- View delivery evidence photo when order is delivered

---

## Employee Features

- Secure login system
- Administrative dashboard
- User management
- Order management
- Edit orders
- Logical deletion of orders
- Restore archived orders
- Search orders by:
  - Invoice number
  - Customer number
  - Date
  - Status

---

# User Interface

The application interface was developed using **Blade templates** and **Bootstrap 5**.

The system includes:

- Modern welcome page
- Professional login view
- Responsive dashboard
- Orders management section
- Archived orders section
- Responsive tables and forms
- Status badges
- Sidebar navigation
- Attractive visual design

---

# User Experience Features

The application includes several features to improve user experience:

- SweetAlert2 notifications
- Confirmation messages
- Responsive design
- Easy navigation
- Color-coded statuses
- Modern dashboard interface
- Custom permission error page

---

# Alerts and Notifications

The system displays visual notifications when:

- An order is created
- An order is updated
- An order is archived
- An archived order is restored

---

# Security Features

- Authentication system
- Role-based authorization
- Middleware route protection
- Customers cannot register
- Restricted views by role
- Custom access denied page
- Logical deletion instead of physical deletion
- Photo upload restricted to Route department

---

# Work Methodology

The project follows the **Agile - Scrum** methodology.

## Why Scrum?

- The system involves multiple departments.
- Requirements may evolve over time.
- Development can be divided into incremental sprints.
- Continuous validation reduces development risks.

---

# Proposed Sprint Plan

| Sprint | Deliverable |
|--------|-------------|
| Sprint 1 | Authentication & Roles |
| Sprint 2 | Order Lifecycle |
| Sprint 3 | Dashboard & Search |
| Sprint 4 | Photo Upload |
| Sprint 5 | Testing & Deployment |

---

# Database Selection

PostgreSQL/MySQL was selected because:

- It is ACID compliant
- It guarantees data integrity
- It supports relational constraints
- It is scalable
- It is open-source

---

# Technologies Used

- Laravel 11
- PHP 8
- Blade
- Bootstrap 5
- PostgreSQL / MySQL
- SweetAlert2
- HTML5
- CSS3
- JavaScript
- Git & GitHub

---

# Installation

Clone the repository:

```bash
git clone https://github.com/alguzem/halcon-order-tracking-system.git
