import Fraction from '../src/index'

test('toString', () => {
  expect(new Fraction(5, 2).toString()).toBe('2\'1/2')
})

test('getNumer', () => {
  expect(new Fraction(1, 2).numer).toBe(1)
})

test('getDenom', () => {
  expect(new Fraction(1, 2).denom).toBe(2)
})

test('add', () => {
  const frac1 = new Fraction(1, 5)
  const frac2 = new Fraction(1, 4)
  expect(frac1.add(frac2).toString()).toBe('9/20')
})

test('sub', () => {
  const frac1 = new Fraction(3, 5)
  const frac2 = new Fraction(2, 5)
  expect(frac1.sub(frac2).toString()).toBe('1/5')
})
