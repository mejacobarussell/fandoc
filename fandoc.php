
<div style="color:var(--text-color); padding:20px;">
    <h2 style="display:flex; align-items:center;"><i class="fa fa-fan"></i> FanDoc Dashboard</h2>
    <div style="background:var(--input-bg); border:1px solid var(--border-color); padding:15px; border-radius:4px;">
        <h3>Live Sensors</h3>
                    <div style="display:flex; justify-content:space-between; padding:8px; border-bottom:1px solid rgba(255,255,255,0.05);">
                <span>corsaircpro: pwm1</span>
                <span style="color:var(--active-color); font-weight:bold;">288 RPM</span>
            </div>
                    <div style="display:flex; justify-content:space-between; padding:8px; border-bottom:1px solid rgba(255,255,255,0.05);">
                <span>corsaircpro: pwm2</span>
                <span style="color:var(--active-color); font-weight:bold;">1668 RPM</span>
            </div>
                    <div style="display:flex; justify-content:space-between; padding:8px; border-bottom:1px solid rgba(255,255,255,0.05);">
                <span>corsaircpro: pwm3</span>
                <span style="color:var(--active-color); font-weight:bold;">2948 RPM</span>
            </div>
                    <div style="display:flex; justify-content:space-between; padding:8px; border-bottom:1px solid rgba(255,255,255,0.05);">
                <span>amdgpu: pwm1</span>
                <span style="color:var(--active-color); font-weight:bold;">0 RPM</span>
            </div>
                    <div style="display:flex; justify-content:space-between; padding:8px; border-bottom:1px solid rgba(255,255,255,0.05);">
                <span>nct6798: pwm1</span>
                <span style="color:var(--active-color); font-weight:bold;">0 RPM</span>
            </div>
                    <div style="display:flex; justify-content:space-between; padding:8px; border-bottom:1px solid rgba(255,255,255,0.05);">
                <span>nct6798: pwm2</span>
                <span style="color:var(--active-color); font-weight:bold;">750 RPM</span>
            </div>
                    <div style="display:flex; justify-content:space-between; padding:8px; border-bottom:1px solid rgba(255,255,255,0.05);">
                <span>nct6798: pwm3</span>
                <span style="color:var(--active-color); font-weight:bold;">2170 RPM</span>
            </div>
                    <div style="display:flex; justify-content:space-between; padding:8px; border-bottom:1px solid rgba(255,255,255,0.05);">
                <span>nct6798: pwm4</span>
                <span style="color:var(--active-color); font-weight:bold;">0 RPM</span>
            </div>
                    <div style="display:flex; justify-content:space-between; padding:8px; border-bottom:1px solid rgba(255,255,255,0.05);">
                <span>nct6798: pwm5</span>
                <span style="color:var(--active-color); font-weight:bold;">1988 RPM</span>
            </div>
                    <div style="display:flex; justify-content:space-between; padding:8px; border-bottom:1px solid rgba(255,255,255,0.05);">
                <span>nct6798: pwm6</span>
                <span style="color:var(--active-color); font-weight:bold;">0 RPM</span>
            </div>
            </div>
    
    <form id="fandocForm" style="margin-top:20px;">
        <button type="button" class="btn btn-primary" onclick="saveAll()">Save to Fan_Doc Appdata</button>
    </form>
</div>

<script>
function saveAll(){
    fetch('/plugins/fandoc/fandoc_save.php', { method:'POST', body:new FormData(document.getElementById('fandocForm')) })
    .then(r=>r.json()).then(d=>alert('Saved!'));
}
</script>