# Task Manager

A simple Laravel-based Task Manager application developed as a school project. The application allows users to create, view, edit, update, and delete tasks.

## Project Information

**Project Code:** WST21-PM-2026-SF  
**Student Name:** Rogelio G. Cabangca II  
**Course & Year:** BSIT - 2nd Year  
**Database Used:** SQLite

## GitHub Repository

[View the Task Manager Repository](https://github.com/rizzwoodscollegesfitnessgym-netizen/task-manager)

## Application

The application is a Task Manager where users can manage their tasks.

### Local Application

When the Laravel development server is running, the application can be opened at:

http://127.0.0.1:8000/tasks

> Note: `127.0.0.1:8000` is a local development address and can only be accessed from the computer running the application.

## Application Pages and Routes

### 1. View Tasks

Main task list:

http://127.0.0.1:8000/tasks

This page displays all tasks in the system.

### 2. Add Task

Create a new task:

http://127.0.0.1:8000/tasks/create

This page allows the user to enter:

- Task Title
- Description
- Due Date
- Status

### 3. View Task

Individual task details:

```text
/tasks/{task}