import './bootstrap';

import Alpine from 'alpinejs';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import flatpickr from 'flatpickr';
import { French } from 'flatpickr/dist/l10n/fr.js';

import 'flatpickr/dist/flatpickr.min.css';



window.Alpine = Alpine;

Alpine.start();

/* =========================================================
   PUBLIC HEADER — SCROLL STATE
========================================================= */

document.addEventListener('DOMContentLoaded', () => {

    const header = document.querySelector('.public-header');

    if (!header) {
        return;
    }

    const handleScroll = () => {

        if (window.scrollY > 80) {

            header.classList.add('header--scrolled');
            header.classList.remove('header--transparent');

        } else {

            header.classList.add('header--transparent');
            header.classList.remove('header--scrolled');

        }

    };

    window.addEventListener('scroll', handleScroll, {
        passive: true
    });

    handleScroll();

});

/* =========================================================
   SCROLL REVEAL ANIMATIONS
========================================================= */

document.addEventListener('DOMContentLoaded', () => {

    const animatedElements = document.querySelectorAll(
        '[class*="animate-"]'
    );

    if (!animatedElements.length) {
        return;
    }

    const observer = new IntersectionObserver(
        (entries, observer) => {

            entries.forEach((entry) => {

                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('is-visible');

                observer.unobserve(entry.target);
            });

        },
        {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        }
    );

    animatedElements.forEach((element) => {
        observer.observe(element);
    });

});



/* =========================================================
   FLATPICKR — APPOINTMENT CALENDAR
========================================================= */


const appointmentCalendar = document.querySelector('#appointment-calendar');
const appointmentDate = document.querySelector('#appointment-date');

if (appointmentCalendar && appointmentDate) {

    flatpickr(appointmentCalendar, {

        inline: true,

        locale: French,

        minDate: 'today',

        dateFormat: 'Y-m-d',

        monthSelectorType: 'static',

        disable: [
            function (date) {
                return date.getDay() === 0 || date.getDay() === 6;
            }
        ],

        onChange: function (selectedDates, dateStr) {
            appointmentDate.value = dateStr;
        }

    });

}


document.addEventListener('DOMContentLoaded', () => {
    const alerts = document.querySelectorAll('.auto-dismiss-alert');

    alerts.forEach((alert) => {
        setTimeout(() => {
            alert.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            alert.style.opacity = '0';
            alert.style.transform = 'translateY(-10px)';

            setTimeout(() => {
                alert.remove();
            }, 300);
        }, 3000);
    });
});