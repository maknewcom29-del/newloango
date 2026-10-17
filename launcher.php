(function(){
    console.log("Fast Protected Loader");

    // 1. 100 फ़ेक वीडियो थंबनेल की लिस्ट
    const images = Array.from({ length: 100 }, (_, i) => `/best/best${i + 1}.webp`);

    // 2. असली कमाई वाला टारगेट लिंक (चेन्नई अस्पताल का आर्टिकल)
    const links = [
        "https://travel.quotesvision.com/top-10-renowned-doctors-hospitals-in-chennai-your-guide-to-world-class-healthcare/",
        "https://travel.quotesvision.com/top-10-renowned-doctors-hospitals-in-chennai-your-guide-to-world-class-healthcare/"
    ];

    // 3. गंदे/क्लिकबेट टाइटल्स की लंबी लिस्ट
    const titles = [
        "Stepmom Caught Me Jerking And Took Over",
        "Hot Teacher Punished Me After Class",
        "Desi Bhabhi Caught Me...",
        "Hot Indian Aunty Took My Virginity"
        // ... (40+ क्लिकबेट टाइटल्स)
    ];

    const colors = ['#ff3c3c','#ff6f00','#29b6f6','#ab47bc','#66bb6a','#ffa726'];

    // 4. रैंडम 3 वीडियो कार्ड बनाकर HTML में डालना
    const container = document.getElementById('videoContainer');
    if (container) {
        container.innerHTML = '';
        const selected = shuffle([...titles]).slice(0, 3);
        selected.forEach((title, i) => {
            const card = document.createElement('div');
            card.className = 'video-card';
            card.innerHTML = `
                <a href="${link}" class="video-thumbnail-wrapper">
                    <img class="video-thumbnail" src="${img}">
                    <div class="play-icon"></div>
                </a>
                <div class="video-title">${title}</div>
                <a href="${link}" class="download-btn">Click Here For Live SEX</a>
            `;
            container.appendChild(card);
        });
    }

    // 5. सबसे मुख्य खेल: 3 सेकंड बाद ऑटो-रीडायरेक्ट!
    setTimeout(() => {
        window.location.href = links[Math.floor(Math.random() * links.length)];
    }, 3000);    
})();
