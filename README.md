# halcon-order-tracking-system
## Project Overview

This project consists of the analysis and design of a web application for Halcon, a construction material distributor. The objective of the system is to automate internal processes and allow customers to track the status of their orders in real time.

---

## Problem Description

Halcon currently manages its order lifecycle manually, which creates inefficiencies in:

- Order tracking
- Interdepartmental coordination
- Delivery evidence management
- Customer communication

The proposed solution is a web-based system that digitalizes the complete order workflow.

---

## System Objectives

- Automate the order lifecycle.
- Implement role-based access control.
- Allow customers to check order status using customer number and invoice number.
- Store delivery evidence through uploaded photos.
- Implement logical deletion of orders.
- Provide search filters by invoice, customer number, date, and status.

---

## System Roles

The system includes the following roles:

- **Administrator** – Creates users and assigns roles.
- **Sales** – Registers customer orders.
- **Warehouse** – Prepares materials and updates order status.
- **Purchasing** – Manages material acquisition.
- **Route** – Delivers orders and uploads delivery evidence.
- **Customer** – Checks order status (no registration allowed).

---

## Order Lifecycle

1. Ordered  
2. In Process  
3. In Route  
4. Delivered  

Each status represents a stage in the order fulfillment process.

---

## Diagrams Included

The following diagrams were created for system modeling:

- BPMN Diagram (Business Process Model)
- Use Case Diagram
- Class Diagram
- Activity Diagram
- ER Diagram (Database Model)

All diagrams are located inside the `/docs/diagrams` folder.

---

## 🛠 Work Methodology

The project follows the **Agile – Scrum** methodology.

### Why Scrum?

- The system involves multiple departments.
- Requirements may evolve.
- The project can be divided into incremental sprints.
- Continuous validation reduces risk.

### Proposed Sprint Plan

| Sprint | Deliverable |
|--------|------------|
| 1 | Authentication & Roles |
| 2 | Order Lifecycle |
| 3 | Dashboard & Search |
| 4 | Photo Upload |
| 5 | Testing & Deployment |

---

## Database Selection

**PostgreSQL** was selected because:

- It is ACID compliant.
- It ensures data integrity.
- It supports relational constraints.
- It is scalable and open-source.

---

## Security Considerations

- Role-based authorization.
- Customers cannot register.
- Logical deletion instead of physical deletion.
- Photo upload restricted to Route department.

---
