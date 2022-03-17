const express = require('express');
const app = express();
const port = 3003;

app.set('view engine', 'ejs');
app.use(express.static('public'));

app.get('/', (req, res) => {
	res.status(200).render('index');
});

app.get('/commands', (req, res) => {
	res.status(200).render('commands');
});

app.get('/changelogs', (req, res) => {
	res.status(200).render('changelogs');
});

app.get('/info', (req, res) => {
	res.status(200).render('info');
});

app.get('/policies', (req, res) => {
	res.status(200).render('policies');
});

app.get('/custom', (req, res) => {
	res.status(200).render('custom');
});

app.get('/thanks', (req, res) => {
	if (req.query.error === undefined && req.query.code === undefined)
		return res.status(200).render('thanks');
	if (req.query.error) {
		return res.status(200).redirect('https://bots.shadowdevs.com');
	} else {
		res.status(200).redirect('https://bots.shadowdevs.com/thanks');
	}
});

app.get('/invite', (req, res) => {
	res
		.status(200)
		.redirect(
			'https://discord.com/oauth2/authorize?client_id=740023863479631943&permissions=1513938742527&scope=bot&response_type=code&redirect_uri=https://bots.shadowdevs.com/thanks'
		);
});

app.get('/support', (req, res) => {
	res.status(200).redirect('https://discord.gg/fVrRa8z');
});

app.get('*', (req, res) => {
	res.status(404).render('404');
});

app.listen(port, () => {
	console.log(`SD Bots website is active and listening to port ${port}`);
});
