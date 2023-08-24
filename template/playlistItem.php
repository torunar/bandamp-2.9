<li id="playlistItem<?= $track->id ?>" class="playlist__item">
    <audio id="audio<?= $track->id ?>" src="<?= $track->url ?>" onended="playNextTrack(<?= $track->id ?>);"></audio>
    <div class="track-info track-info__playlist">
        <button class="track-info__play" onclick="playTrack(<?= $track->id ?>)">▶️</button>
        <div class="track-info__artist track-info__artist--playlist"><?= $track->artist ?></div>
        <div class="track-info__track track-info__track--playlist"><?= $track->title ?></div>
    </div>
</li>
