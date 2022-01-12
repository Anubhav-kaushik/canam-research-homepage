// dots animation on hover
function scaleCircle(circle, magnitude) {
    circle.attributes.r *= magnitude;
}

function runUntilExceedsMax(circle, maxRadius) {
    if (circle.attributes.r < maxRadius) {
        scaleCircle(circle, 1.1);
        requestAnimationFrame(function () {
            runUntilExceedsMax(circle, maxRadius);
        });
    }
    return false
}

function runUntilExceedsMin(circle, minRadius) {
    if (circle.attributes.r > minRadius) {
        scaleCircle(circle, 0.9);
        requestAnimationFrame(function () { runUntilExceedsMin(circle, minRadius); });
    }
    return false
}

function radiusChange(circle, maxTimes, minTimes) {
    let currentRadius = circle.attributes.r;
    let maxRadius = currentRadius * maxTimes;
    let minRadius = currentRadius * minTimes;

    const anim = function () {
        if (currentRadius < maxRadius) {
            runUntilExceedsMax(circle, maxRadius);
            radiusChange(circle, maxTimes, minTimes);
        }
    }
}

const iconCardsBottom = document.querySelectorAll('.icons_card');
const iconCardsTop = document.querySelectorAll('.icons_card_top');

iconCardsBottom.forEach(iconCard => {
    iconCard.addEventListener('mouseover', () => {
        const dots = iconCard.querySelectorAll('.dots');
        dots.forEach(dot => {
            
        });
    });
});