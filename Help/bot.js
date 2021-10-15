const Discord = require('discord.js');
const client = new Discord.Client();

client.on('ready', () => {
  console.log(`Logged in as ${client.user.tag}!`);
});

client.on('message', msg => {
  if (msg.content === 'مرحبا') {
    msg.reply('شباب');
  }
});

client.login('Njc2NDUyMzEyNjA0MjEzMjc3.XkF5Xw.C9JIIpuP5YeSCtvRXxcA64LWWjk');