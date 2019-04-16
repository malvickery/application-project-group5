let quotes = [
    'The mountains are calling and I must go.',
    'You can\'t buy happiness but you can buy a lift pass',
    'A pair of skis are the ultimate transformation to freedom.',
    'Happiness is first tracks in fresh snow.',
    'On top of the mountains where everything makes sense.',
    'Don\'t disturb me, I am thinking about skiing.',
    'What happens on the slopes gets laughed about all year.',
    'Laugh. Love. Ski.',
    'Once you take your first ride up the lift, your life will be changed forever.'
]

const newQuote = () => {
    let randomNumber = Math.floor(Math.random() * (quotes.length));
    document.getElementById('quoteDisplay').innerHTML = quotes[randomNumber];
};
