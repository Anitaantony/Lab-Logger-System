# Lab Logger System

## 📌 Project Overview
The **Lab Logger System** is a software solution designed to efficiently manage and monitor computer lab operations. 
It provides real-time monitoring, secure user authentication, and comprehensive reporting features to enhance 
resource utilization and maintain security within the lab environment.

### ✨ Key Features
- Secure login and authentication mechanisms
- User management (students, teachers, admin)
- Resource allocation and monitoring
- Task and login activity tracking
- Comprehensive reporting and analytics
- User-friendly interface

---

## ⚙️ System Configuration

### Hardware Requirements
- Processor: Intel i3 11th gen
- RAM: 4 GB
- Hard Disk: 500 GB

### Software Requirements
- Operating System: CentOS 7
- Browser: Firefox
- Frontend: HTML5, CSS3, JavaScript ES6
- Backend: PHP 5.5.9
- Database: MySQL 5.6.16
- Server: XAMPP 1.8.3-3

---

## 🔍 System Analysis

### Existing System Drawbacks
- Manual record-keeping using files and paper
- Time-consuming data retrieval
- High chances of errors and redundancy
- Difficult to update or edit records

### Proposed System Benefits
- Quick and easy information retrieval
- Increased accuracy and data integrity
- Reduced redundancy and improved security
- Efficient and user-friendly

---

## 🗂 Database Design

- **Tables:**
  - Teacher (teacherId, teacherName, contact, email, department)
  - Student (admissionNumber, studentName, course, batch, year, contact, email)
  - Admin (name, email, password)
  - StdDetails (admissionNumber, login time, date, language, teacher, logout time)
  - Tasks (programNo, programName, language, teacher, admissionNumber)

Normalization applied up to **3NF** to ensure reduced redundancy and maintain integrity.

---

## 🧪 System Testing

- **Unit Testing:** Verified functionality of individual modules.  
- **Integration Testing:** Checked interactions between components.  
- **Validation Testing:** Ensured features met requirements.  
- **System Testing:** Verified the system as a whole met user needs.  
- **Usability Testing:** Assessed ease of use for end users.  
- **Regression Testing:** Re-tested after modifications to ensure stability.

---

## 🚀 System Implementation

- Installation and configuration of software environment  
- Data migration from manual records to system database  
- User training for students, teachers, and administrators  
- Ongoing maintenance, monitoring, and updates  

---

## 📈 Conclusion & Future Scope

The **Lab Logger System** ensures efficient and secure management of computer labs in educational institutions.  
It improves accountability, streamlines administrative tasks, and enhances the overall lab environment.  

### Future Enhancements:
- Biometric authentication for stronger security  
- Machine learning integration for anomaly detection  
- Cloud-based storage for scalability  
- IoT device integration for predictive maintenance  
- Collaborative features for group work and communication  

---

## 📚 References

- Binu M.B and Amaladevi V.C, *Web Programming using PHP*, Prakash Publications, 2019  
- Roger S. Pressman, *Software Engineering: A Practitioner’s Approach*  
- [OpenAI](https://www.openai.com)  
- [GeeksforGeeks](https://www.geeksforgeeks.org)  
- [YouTube Tutorials](https://www.youtube.com)  
