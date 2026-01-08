const VideoPlayer = {
    player: null,
    
    init() {
        this.player = document.getElementById('videoPlayer');
        this.setupEventListeners();
    },
    
    play() {
        if (this.player) {
            Modals.open('videoModal');
            this.player.play();
        }
    },
    
    pause() {
        if (this.player) {
            this.player.pause();
        }
    },
    
    stop() {
        if (this.player) {
            this.player.pause();
            this.player.currentTime = 0;
        }
    },
    
    setupEventListeners() {
        // Control de teclas
        document.addEventListener('keydown', (e) => {
            if (!document.getElementById('videoModal').classList.contains('hidden')) {
                if (e.key === ' ') {
                    e.preventDefault();
                    if (this.player.paused) {
                        this.player.play();
                    } else {
                        this.player.pause();
                    }
                }
            }
        });
    }
};

function openVideoModal() {
    VideoPlayer.play();
}

function closeVideoModal() {
    VideoPlayer.stop();
    Modals.close('videoModal');
}