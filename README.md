# 🩸 E-Blood Bank Management System

> A modern, full-stack web platform built to bridge the gap between blood donors and patients in need — making the process of finding, requesting, and donating blood faster, safer, and more accessible for everyone.

---

## 📌 Project Description

Managing blood donations the old-fashioned way — phone calls, manual registers, and word-of-mouth — costs time that patients in emergencies simply don't have. **E-Blood Bank** was built to fix that.

This is a full-stack Blood Bank Management System developed with **PHP & MySQL** on the backend and **HTML5, CSS3, and Vanilla JavaScript** on the frontend. It gives donors, requesters, and hospital staff a single, reliable platform where blood availability is tracked in real time, requests are matched with verified donors automatically, and every critical alert reaches the right person without delay.

Whether you're a donor wanting to register your blood group, a family member urgently searching for a rare type, or a hospital managing multiple ongoing requests — this system was designed with you in mind. Clean interface, mobile-friendly, dark mode included.

---

## 🛠️ Tech Stack

| Layer | Technology |
|---|---|
| Frontend | HTML5, CSS3 (Vanilla), JavaScript (ES6+) |
| Backend | PHP 8+ |
| Database | MySQL |
| Fonts | Sora, DM Sans (Google Fonts) |
| Auth | PHP Sessions (planned: JWT) |
| Version Control | Git & GitHub |

---

## 📁 Project Structure

```
E-Blood_Bank_PHP/
│
├── index.html                  ← Home Page (post-login)
├── login.html                  ← Sign In Page
├── signup.html                 ← Role Selection (Donor / Requester)
├── register-donor.html         ← 4-Step Donor Registration Form
├── register-requester.html     ← 4-Step Requester Registration Form
├── dashboard.html              ← Main Dashboard UI
├── request-blood.html          ← Blood Request Form + History
├── contact.html                ← Contact, FAQ & Support
│
├── css/
│   └── style.css               ← Complete design system (tokens, components, layouts)
|   └── contact.css             ← Some added design systems for contact.html
|   └── dashboard.css           ← Some added designs for dashboard.html
|   └── request-blood.css       ← Some added designs for request-blood.html
│
├── js/
│   └── script.js               ← All frontend logic (validation, sidebar, toasts, etc.)
│
├── assets/                     ← Images, icons, static files
│
├── php/                        ← (Backend — coming soon)
│   ├── config/
│   │   └── db.php              ← Database connection
│   ├── auth/
│   │   ├── login.php
│   │   ├── logout.php
│   │   └── register.php
│   ├── donor/
│   │   ├── register-donor.php
│   │   └── get-donors.php
│   ├── request/
│   │   ├── submit-request.php
│   │   └── get-requests.php
│   └── contact/
│       └── send-message.php
│
└── README.md
```

---

## ✨ Features & Functionality

### 🔐 Authentication
- Separate registration flows for **Donors** and **Blood Requesters**
- Role-selector page (`signup.html`) routes users to the correct form
- Login page with email + password, remember me, and forgot password link
- Frontend: full JS validation — password strength, email format, confirm match
- Backend: PHP session-based authentication *(coming in Phase 2)*

---

### 💉 Donor Module
- **4-Step Registration Form** — Personal Info → Medical Info → Account Setup → Confirm
- Collects: name, DOB, gender, phone, city, address, blood group, weight, donation history
- Medical eligibility checklist (age, health, disease-free, medication-free confirmations)
- Donor availability toggle — mark yourself as ready to donate
- SMS notification opt-in for when your blood type is urgently needed
- Donation history tracking with digital certificate generation *(Phase 2)*
- Achievements & badges system (Regular Donor, Emergency Responder, etc.)

---

### 🏥 Requester Module
- **4-Step Registration Form** — Personal Info → Patient Details → Account Setup → Confirm
- Collects: requester info, relation to patient, patient name/age, blood type needed, units required, hospital name, ward/room number, medical condition
- Alternate blood type acceptance option for wider donor matching
- Match notification via SMS and in-app alerts

---

### 🩸 Blood Request System
- Submit blood requests with blood type selector (A+, A−, B+, B−, AB+, AB−, O+, O−)
- Three urgency levels: **Critical** (2 hrs), **Urgent** (24 hrs), **Scheduled** (planned)
- Live blood availability ticker shown on the request page
- Real-time toast feedback when selecting a blood type (e.g., "AB− is critically low — 4 units remaining")
- Request history table with columns: Request ID, Blood Type, Patient, Hospital, Units, Priority, Date, Status
- Status tracking: Pending → Searching → Fulfilled / Cancelled
- Cancel or edit any active request from the dashboard

---

### 📊 Dashboard
- Personalized greeting with date-aware header
- **Stat cards**: Total Donations, Lives Saved, Days Since Last Donation, Active Requests Nearby
- Emergency alert banner for critically low blood types
- **Tabbed request table**: All / Pending / Fulfilled / Cancelled
- Recent activity feed (donations, alerts, matches, badges)
- Blood stock overview with mini bar charts per blood group
- Donor profile summary with achievements panel
- All stats animate in using counter animations on scroll

---

### 🏠 Home Page
- Full hero section with live blood availability card (all 8 blood types with unit counts and color-coded availability dots)
- Animated counters: Registered Donors, Lives Saved, Partner Hospitals
- Features section (6 platform highlights)
- How It Works — separate step flows for Donors and Requesters
- Blood type compatibility reference table (donate/receive matrix)
- CTA banner with registration links
- Full footer with quick links, emergency contact, and registration routes

---

### 📬 Contact & Support
- Contact form with fields: Name, Email, Phone, Subject (dropdown), Message
- Subject categories: General, Donation Help, Request Help, Account Issue, Technical Support, Hospital Partnership, Feedback, Emergency
- **FAQ Accordion** — 6 expandable questions covering eligibility, matching, data safety, fees, cancellations
- Contact info cards: helpline, emergency line, email, office address
- Office hours display with live open/closed indicator
- Social media links (Facebook, Twitter/X, Instagram, LinkedIn)
- Map placeholder (ready for Google Maps iframe in Phase 2)
- Partner hospitals grid with "Apply for Partnership" CTA
- Emergency hotline strip at the top of the page

---

### 🌙 Dark Mode
- Fully implemented dark mode with smooth transitions
- Toggle button in every navbar and auth page
- Preference saved in `localStorage` — persists across sessions and page reloads
- Respects system `prefers-color-scheme` as default if no preference is stored

---

### 📱 Responsive Design
- Fully responsive across mobile (320px+), tablet, and desktop
- Collapsible sidebar on all internal pages — hamburger toggle on both mobile and desktop
- Sidebar state (open/closed) saved in `localStorage`
- Mobile navigation drawer with smooth slide-in animation
- Auth pages: full split-panel on desktop, single-column on mobile
- Grid layouts collapse gracefully at breakpoints: 1024px, 768px, 480px

---

### 🧩 UI/UX Design System (`css/style.css`)
- CSS custom properties (tokens) for colors, spacing, radius, shadows, transitions
- Complete light and dark mode token sets
- Reusable components: Buttons (6 variants), Cards, Stat Cards, Badges, Blood Type Tags, Alerts, Toasts, Tables, Form Controls, Avatars, Spinners, Skeletons
- Multi-step form progress bar component
- Scroll-triggered fade-in animations via `IntersectionObserver`
- Counter animation on scroll for numeric stats
- Toast notification system (success, error, warning, info) with auto-dismiss
- Tooltip support via `data-tooltip` attribute
- Custom scrollbar styling
- Semantic HTML throughout with ARIA labels and roles

---

### ⚙️ JavaScript Engine (`js/script.js`)
- **ThemeManager** — dark mode init, toggle, localStorage sync
- **Navbar** — scroll shadow, hamburger toggle, active link detection
- **Sidebar** — open/close/toggle, localStorage state, overlay on mobile, responsive resize listener
- **FormValidator** — rules engine (required, email, phone, minLength, maxLength, password strength, field match), per-field error display, submit validation
- **MultiStepForm** — step navigation with per-step validation before advancing
- **initPasswordToggles** — show/hide password fields
- **initRoleSelector** — role card selection + redirect to correct registration page
- **initScrollAnimations** — IntersectionObserver-based fade-in trigger
- **initCounters** — eased number animation from 0 to target
- **initTabs** — tab group switching for dashboard panels
- **initSmoothScroll** — anchor link smooth scrolling
- **showToast** — global toast factory
- All form submit handlers are stub-ready: replace `setTimeout` with `fetch()` for PHP backend

---

## 🚀 Getting Started

### Prerequisites
- A modern web browser (Chrome, Firefox, Edge, Safari)
- For Phase 2 (backend): PHP 8+, MySQL 5.7+, Apache/Nginx (or XAMPP/WAMP locally)

### Running the Frontend (Phase 1)
```bash
# Clone the repository
git clone https://github.com/SujalYadav_790/E-Blood_Bank_PHP.git

# Open in browser — no build step needed
open E-Blood_Bank_PHP/login.html
```
Or simply open `login.html` directly in your browser. All CSS and JS are vanilla — no npm, no bundler, no dependencies.

### Recommended Entry Points
| Purpose | Start Here |
|---|---|
| New visitor / demo | `login.html` |
| See the UI system | `dashboard.html` |
| Test donor flow | `signup.html` → `register-donor.html` |
| Test requester flow | `signup.html` → `register-requester.html` |
| Home page | `index.html` |

---

## 🔌 Backend Integration Plan (Phase 2)

Each frontend form is already wired with a `data-on-valid="handlerName"` attribute. To connect the backend, replace the `setTimeout` simulation inside each handler in `script.js` with a `fetch()` call:

javascript
// Example: replacing handleLoginSubmit in script.js
async function handleLoginSubmit(formEl) {
  const data = new FormData(formEl);
  const response = await fetch('php/auth/login.php', {
    method: 'POST',
    body: data
  });
  const result = await response.json();
  if (result.success) {
    window.location.href = 'dashboard.html';
  } else {
    showToast(result.message, 'error');
  }
}

No HTML changes are needed. The frontend is fully backend-ready.

---

## 📋 Planned Features (Phase 2 & Beyond)

- [ ] PHP + MySQL full backend with REST-style endpoints
- [ ] Admin panel for managing donors, requests, hospitals
- [ ] JWT or session-based authentication with role middleware
- [ ] Real-time donor-requester matching algorithm
- [ ] SMS notifications via Twilio / MSG91
- [ ] Google Maps integration for hospital location display
- [ ] Email verification on registration (PHPMailer)
- [ ] Donation certificate PDF generation
- [ ] Advanced search & filter for blood requests
- [ ] Blood camp / donation drive event management
- [ ] Analytics dashboard for admins (charts, trends)

---

## 🤝 Contributing

Contributions are welcome. If you'd like to improve the UI, fix a bug, or add a backend feature, please fork the repository and open a pull request. For major changes, open an issue first to discuss what you'd like to change.

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

## 👨‍💻 Author

Built with care to help save lives. If this project helps even one person get blood in time, it was worth building.

---

> "Blood is the most precious gift that anyone can give to another person — the gift of life." — World Health Organization
