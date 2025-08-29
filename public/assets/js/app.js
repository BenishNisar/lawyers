// downloads page js
 (function(){
    const search = document.getElementById('dlSearch');
    const chips = document.querySelectorAll('.dl-chip');
    const cards = document.querySelectorAll('.dl-card');

    let active = 'all';

    chips.forEach(ch => ch.addEventListener('click', () => {
      chips.forEach(c=>c.classList.remove('is-active'));
      ch.classList.add('is-active');
      active = ch.dataset.filter;
      applyFilter();
    }));

    search.addEventListener('input', applyFilter);

    function applyFilter(){
      const q = (search.value || '').toLowerCase().trim();
      cards.forEach(card => {
        const tags = card.dataset.tags || '';
        const title = (card.dataset.title || '').toLowerCase();
        const matchesTag = (active==='all') || tags.includes(active);
        const matchesText = !q || title.includes(q) || tags.includes(q);
        card.style.display = (matchesTag && matchesText) ? '' : 'none';
      });
    }
  })();


//   contactform
// latestnewss
