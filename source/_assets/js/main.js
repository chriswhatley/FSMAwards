// FAQ questions - dynamically generated Alpine Accordion
window.faq = [
{
    question: "How much does it cost to enter?",
    answer: [
    "It’s free to enter."
    ]
},
{
    question: "Can I enter two different people or two different products or campaigns to the same category?",
    answer: [
    "Yes. You can enter each category as many times as you like."  
    ]
},
{
    question: "Can I enter the same entry into multiple categories?",
    answer: [
    "Yes, you can provided it meets the specific criteria of each category."
    ]
},
{
    question: "Can sponsors enter?",
    answer: [
    "Sponsors can enter but they can’t enter a category they are sponsoring."
    ]
},
{
    question: "When do entries open for the FSM Awards 2022?",
    answer: [
    "1st May 2021 is the opening date for entries."
    ]
},
{
    question: "When do entries close?",
    answer: [
    "Entries will close on 30th November 2021 at 11:59pm."
    ]
},
{
    question: "How do I enter the Awards?",
    answer: [
    "You enter online via our <a href=\"/nominate\" class=\"text-red-pigment-500 font-semibold\">award entries page</a> and select the category you wish to enter. Please make sure you fill in all the entry fields and provide accurate contact information. When entries open on 1 May 2021 you can <a href=\"/nominate\" class=\"text-red-pigment-500 font-semibold\">enter nominations here</a>."
    ]
},
{
    question: "When will the shortlist be revealed?",
    answer: [
    "We will announce the shortlist in February 2022."
    ]
},
{
    question: "When will the winners be revealed?",
    answer: [
    "Winners will be announced at The FSM Awards, taking place on 26th April 2022."
    ]
},
// {
//     question: "How can I attend the awards ceremony?",
//     answer: [
//     "It’s free to attend and registration will open on 1 July 2021. You will be able to register to attend at <a href="#" target=\"_blank\" class=\"text-yellow-500 font-semibold\">#########</a>"
//     ]
// },
{
    question: "What should I do if I've got further questions or am unsure if my entry is eligible?",
    answer: [
    "If you have any further questions then please contact us by <a href=\"/contact\" class=\"text-red-pigment-500 font-semibold\">clicking HERE</a>."
    ]
}
];

// Sponsor Carousel 
import Splide from '@splidejs/splide';
new Splide( '.splide', {
    type        : 'loop',
    speed       : '500',
    perPage     : 6,
    perMove     : 1,
    autoplay    : true,
    pauseOnHover: false,
    arrows      : false,
} ).mount();